<?php include_once "../connection.php"; ?>
<?php
   header('Access-Control-Allow-Origin: *');

   $qr = mysqli_query($con, "SELECT * FROM `userss`");

   while ($user = mysqli_fetch_array($qr)) {
      // print_r($user);
      $users[] = array(
                        'id' => $user['id'],
                        'name' => $user['name'],
                        'email' => $user['email'],
                        'gender' => $user['gender'],
                        'city' => $user['city'],
                      );
   }

   // print_r($users)
   //echo"Hello World"
   //echo json_encode(['status' => 'success', 'data' => 'Hello World']);


   // $arr=array('status' => 'success', 'data' => 'Hello World');
   // echo json_encode($arr);


   $arr=array('status' => 'success', 'users' => $users);
   echo json_encode($arr);

?>