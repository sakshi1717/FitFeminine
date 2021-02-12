<?php
if (isset($_POST['loginButton'])) {
	//Login button was pressed
	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = $account->login($username, $password);

	if ($result) {
		$_SESSION['userLoggedIn'] = $username;
		header("Location: index.php");
	}
}
