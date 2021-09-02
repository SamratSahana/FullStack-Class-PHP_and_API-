<?php

	// $p = $_FILES["pic"];
	// print_r($p);
	// echo "<br>";
	// echo $nm = $_FILES["pic"]["name"];echo "<br>";
	// echo $path = "Upload/".$nm;echo "<br>";
	// echo $tmp = $_FILES["pic"]["tmp_name"];echo "<br>";

	$path = "Upload/".$_FILES["pic"]["name"];
	$tmp = $_FILES["pic"]["tmp_name"];
	move_uploaded_file($tmp, $path);

?>
<img src="<?php echo $path; ?>" style="height: 50px; width: 100px;">
