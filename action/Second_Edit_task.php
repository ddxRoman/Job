<?php
require_once 'connect.php';
    $name=$_POST['name'];
    $content=$_POST['body'];
    $id=$_POST['id'];
    echo "ID - ".$id."<br>".$name."<br>".$content;
    mysqli_query($connect, "UPDATE `tasks` SET  `name` = '$name', `content` = '$content' WHERE `id` = '$id'");
    header('Location: ../Taskmanager/Task.php');
    ?>