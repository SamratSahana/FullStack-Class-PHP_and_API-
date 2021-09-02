<?php
    include_once './config/database.php';
    include_once './config/auth-guard.php';

    $data = json_decode(file_get_contents("php://input"));

    $postId = $data->postId;

    $query = "
            SELECT
                `comments`.`id` AS `commentId`,
                `comments`.`content` AS `content`,
                `comments`.`createdBy` AS `createdBy`,
                `comments`.`createdAt` AS `createdAt`,
                `userss`.`id` AS `userId`,
                `userss`.`name` AS `name`,
                `userss`.`email` AS `email`,
                `userss`.`gender` AS `gender`,
                `userss`.`city` AS `city`
            FROM 
                `comments`, 
                `userss` 
            WHERE 
                `comments`.`userId` = `userss`.`id` AND
                `comments`.`postId` = ".$postId. " AND 
                `comments`.`status` = 'active'";

    $qry_exec = mysqli_query($con, $query);

    $num = mysqli_num_rows($qry_exec);

    $comments = [];
    while($row = mysqli_fetch_array($qry_exec)) {

        $comments[] = array(
            'id'=>$row['commentId'],
            'user'=>array(
                'userId'=>$row['userId'], 
                'name'=>$row['name'], 
                'email'=>$row['email'], 
                'gender'=>$row['gender'], 
                'city'=>$row['city'], 
            ),
            'content'=>$row['content'],
            'createdBy'=>$row['createdBy'],
            'createdAt'=>$row['createdAt']
        );

    }

    echo json_encode(
        array(
            "status" => "success",
            "data" => $comments
        )
    );
?>