<?php
include("includes/config.php");
include("includes/classes/User.php");


//session_destroy(); LOGOUT

if (isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = new User($con, $_SESSION['userLoggedIn']);
	$username = $userLoggedIn->getUsername();
	echo "<script>userLoggedIn = '$username';</script>";
} else {
	header("Location: register.php");
}

?>

<html>

<head>
	<title>Welcome to FitFeminine!</title>
	<link rel="shortcut icon" href="img/icon3.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css?v=<?php echo time(); ?>">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="assets/js/script.js"></script>
</head>

<body>

	<div id="mainContainer">

		<div id="topContainer">


			
			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('index.php')" class="logo">
					<img src="img/icon3.png" alt="FitFeminine Logo">
					<h2 class="title">FitFeminine</h2>
				</span>
				<span role="link" tabindex="0" onclick="openPage('browse.php')" class="navItemLink">Browse</span>
			
				<span role="link" tabindex="0" onclick="openPage('bmi_calc.php')" class="navItemLink">BMI Calculation</span>
			
				<span role="link" tabindex="0" onclick="openPage('menstrual.php')" class="navItemLink">Menstrual Track</span>
			
				<span role="link" tabindex="0" onclick="openPage('magazines.php')" class="navItemLink">Magazines</span>
			
				<span role="link" tabindex="0" onclick="openPage('illness.php')" class="navItemLink">Vaccines/Illness</span>
			
			
				<span role="link" tabindex="0" onclick="openPage('settings.php')" class="navItemLink"><?php echo $userLoggedIn->getFirstAndLastName(); ?></span>
			
				<span role="link" tabindex="0" onclick="openPage('bmi_calc.php')" class="navItemLink"></span>
				<span role="link" tabindex="0" onclick="openPage('bmi_calc.php')" class="navItemLink"></span>

			</div>
		</div>




			<div id="mainViewContainer">

				<div id="mainContent">