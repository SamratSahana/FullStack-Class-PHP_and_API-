<?php
   
   //print_r($_REQUEST);
   
   // creating a connection with database
   $con = mysqli_connect('localhost', 'root', '', 'fullstack'); //host name , username, password, database name

   //running a query
   $qry = "INSERT INTO `users` VALUES ('', '".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['password']."', 'active')";
   $qry_exec = mysqli_query($con, $qry);
   
   if ($qry_exec) {
       echo "Registered Successfullly";
       header('location: read.php');
   }else {
       echo "Registered Failed";
   }    


?>
