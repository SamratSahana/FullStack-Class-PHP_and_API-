<?php include_once "connection.php"; ?>

<?php

	// checking for duplicate email
	$q1 = mysqli_query($con, "SELECT `id` FROM `userss` WHERE `email` = '".$_REQUEST['email']."' AND `password` = '".$_REQUEST['password']."'");
	$num = mysqli_num_rows($q1);

	if ($num === 1) {
		
		// logging the user in
		session_start();

		$user = mysqli_fetch_array($q1);
		// print_r($user);
		$_SESSION['id'] = $user['id'];

		header('location: profile.php');

	} else {
		header('location: login.php?message=Email or Password Incorrect. Please check your credentials');
	}
?>