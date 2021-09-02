<?php include_once "connection.php"; ?>

<?php

	// running a query
	$qry = "UPDATE `users` SET `name` = '".$_REQUEST['name']."', `email` = '".$_REQUEST['email']."', `password` = '".$_REQUEST['password']."' WHERE `id` = ".$_REQUEST['id'];
	$qry_exec = mysqli_query($con, $qry);

	if ($qry_exec) {
		// echo "Registered Successfully";
		header('location: read.php');
	} else {
		echo "Failed";
	}
?>