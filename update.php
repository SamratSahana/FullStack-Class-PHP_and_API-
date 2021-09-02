<?php include_once "connection.php"; ?>

<?php 
	
	// print_r($_REQUEST);

	$qry = mysqli_query($con, "SELECT * FROM `users` WHERE `ID` = ".$_REQUEST['id']);
	
	$row = mysqli_fetch_array($qry);

	 //print_r($row);
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="update-acc.php" method="post">
		<input type="hidden" name="id" value="<?=$row['ID']?>">
		Name: <input type="text" name="name" value="<?=$row['Name']?>"><br><br>
		Email: <input type="email" name="email" value="<?=$row['Email']?>"><br><br>
		Password: <input type="password" name="password" value="<?=$row['Password']?>"><br><br>
		<input type="submit" value="Update">
	</form>
</body>
</html>