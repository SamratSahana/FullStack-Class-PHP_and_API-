<?php
	
	session_start();
	if (isset($_SESSION['id'])) {
		header('location: profile.php');
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="login-acc.php" method="post">
		Email: <input type="email" name="email"><br><br>
		Password: <input type="password" name="password"><br><br>
		<input type="submit" value="Login">
	</form>

	<p style="color: red">
		<?php
			if(isset($_REQUEST['message'])) {
				echo $_REQUEST['message'];
			}
		?>
	</p>
	<br>
	<a href="register.php">For new user register yourself first</a>
</body>
</html>