<?php include_once "connection.php"; ?>

<?php

	// running a query
	$qry = "INSERT INTO `users` VALUES ('', '".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['password']."', 'active')";
	$qry_exec = mysqli_query($con, $qry);

	if ($qry_exec) {
		// echo "Registered Successfully";
		header('location: read.php');
	} else {
		echo "Failed";
	}
?>