<?php
class Account
{

	private $con;
	private $errorArray;

	public function __construct($con)
	{
		$this->con = $con;
		$this->errorArray = array();
	}

	public function login($un, $pw)
	{

		$pw = md5($pw);

		$query = mysqli_query($this->con, "SELECT * FROM users WHERE username='$un' AND password='$pw'");

		if (mysqli_num_rows($query) == 1) {
			return true;
		} else {
			array_push($this->errorArray, Constants::$loginFailed);
			return false;
		}
	}

	public function register($un, $em, $pw)
	{
		$this->validateUsername($un, $em);
		// $this->validateFirstName($fn);
		// $this->validateLastName($ln);
		// $this->validateEmails($em);
		$this->validatePasswords($pw);

		if (empty($this->errorArray)) {
			//Insert into db
			return $this->insertUserDetails($un, $em, $pw);
		} else {
			return false;
		}
	}

	public function getError($error)
	{
		if (!in_array($error, $this->errorArray)) {
			$error = "";
		}
		return "<span class='errorMessage'>$error</span>";
	}

	private function insertUserDetails($un, $em, $pw)
	{
		$encryptedPw = md5($pw);
		$profilePic = "assets/images/profile-pics/head_emerald.png";
		$date = date("Y-m-d");
		$sql = "INSERT INTO users(username , email , password , signUpDate , profilePic)
				VALUES
				('$un' , '$em' , '$encryptedPw' , '$date' , '$profilePic');";

		$result = mysqli_query($this->con, $sql);

		return $result;
	}

	private function validateUsername($un, $em)
	{

		// if (strlen($un) > 25 || strlen($un) < 5) {
		// 	array_push($this->errorArray, Constants::$usernameCharacters);
		// 	return;
		// }

		$checkUsernameQuery = mysqli_query($this->con, "SELECT username FROM users WHERE username='$un'");
		$checkEmailQuery = mysqli_query($this->con, "SELECT email FROM users WHERE email='$em'");
		if ((mysqli_num_rows($checkUsernameQuery) != 0) || (mysqli_num_rows($checkEmailQuery) != 0)) {
			array_push($this->errorArray, Constants::$usernameTaken);
		}
	}

	private function validatePasswords($pw)
	{

		if ((preg_match('/[^A-Za-z0-9]/', $pw)) || (strlen($pw) > 30 || strlen($pw) < 5)) {
			array_push($this->errorArray, Constants::$passwordInvalid);
			return;
		}
	}
}
