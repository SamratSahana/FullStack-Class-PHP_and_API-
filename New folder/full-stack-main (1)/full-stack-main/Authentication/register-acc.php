<?php include_once "connection.php"; ?>

<?php

	// print_r($_REQUEST);die();

	// checking for duplicate email
	$q1 = mysqli_query($con, "SELECT `id` FROM `users` WHERE `email` = '".$_REQUEST['email']."'");
	$num = mysqli_num_rows($q1);

	if ($num === 0) {

		// insert user data
		$qry = "INSERT INTO `users` VALUES ('', '".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['password']."', '".$_REQUEST['gender']."', '".$_REQUEST['city']."', 'active')";
		$qry_exec = mysqli_query($con, $qry);

		if ($qry_exec) {

			// insert skills
			$q1 = mysqli_query($con, "SELECT `id` FROM `users` WHERE `email` = '".$_REQUEST['email']."'");
			$user = mysqli_fetch_array($q1);

			foreach ($_REQUEST['skills'] as $value) {
				$qry_exec1 = mysqli_query($con, "INSERT INTO `skills` VALUES ('', ".$user['id'].", '".$value."')");
			}
			// echo "Registered Successfully";
			header('location: login.php');
		} else {
			echo "Failed";
		}
	} else {
		echo "Email id already exists. Please try a different email id.";
	}
?>