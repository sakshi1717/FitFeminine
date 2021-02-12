<?php
include("includes/includedFiles.php");
?>

<div class="entityInfo">
	<div class="card" >
	<div class="centerSection">
		<div class="userInfo">
			<img src="assets/images/profile-pics/icon5.png" alt="user profile pic">
			<h1 class="title"><?php echo $userLoggedIn->getFirstAndLastName(); ?></h1>
		</div>
	</div>

	<div class="buttonItems">
		<button class="button" onclick="openPage('updateDetails.php')">USER DETAILS</button>
		<button class="button" onclick="logout()">LOGOUT </button>
	</div>
	</div>
</div>
<script src="assets/js/script.js"></script>