<?php
require_once 'connect.php';
$status= $_POST['currency'];
$id=$product['0'];
$task_id = $_GET['id'];
mysqli_query($connect, "UPDATE `tasks` SET `Status` = '$status' WHERE `tasks`.`id` = $task_id");

echo $task_id. "----".$status;
 header('Location: ../Taskmanager/Task.php');

$priority=$_POST['priority'];
mysqli_query($connect, "UPDATE `tasks` SET `Priority` = '$priority' WHERE `tasks`.`id` = $task_id");

?>