<?php
require_once '../action/connect.php';
session_start();
$name=$_POST['name'];
$body=$_POST['body'];
$author=$_SESSION['user']['login'];
echo $name."<br>". $body;
if($name!=''){
    echo"Try";
mysqli_query($connect, "INSERT INTO `tasks` (`id`, `name`, `content`, `Status`, `owner`)
 VALUES (NULL, '$name', '$body', '0', '$author')");

 header ('Location: ../Taskmanager/Task.php');
}
else{
    echo"False";
}

?>
