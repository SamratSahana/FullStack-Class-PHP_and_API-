<?php include_once "connection.php"; ?>

<table border="1">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Delete</th>
		<th>Update</th>
	</tr>

<?php 


	$qry = mysqli_query($con, "SELECT * FROM `users` WHERE `isDeleted` = 'active'");

	while($row = mysqli_fetch_array($qry)) {
		// print_r($row);
		// echo $row['name'];
		// echo "<br>";

		echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td><a href='delete.php?id=".$row['id']."'>Delete</a></td>";
			echo "<td><a href='update.php?id=".$row['id']."'>Update</a></td>";
		echo "</tr>";
	}
?>


</table>

<a href="register.php">Insert</a>