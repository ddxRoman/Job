<?php
session_start();
 require_once 'connect.php';
$login=$_POST['login'];
$password=$_POST['password'];
$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `name`='$login' AND `password` = '$password' ");


function getIp() {
    
    $keys = [
      'HTTP_CLIENT_IP',
      'HTTP_X_FORWARDED_FOR',
      'REMOTE_ADDR'
    ];
    foreach ($keys as $key) {
      if (!empty($_SERVER[$key])) {
        $ip = trim(end(explode(',', $_SERVER[$key])));
        if (filter_var($ip, FILTER_VALIDATE_IP)) {
          return $ip;
        }
      }
    }
  }

  $ip = getIp();
if(mysqli_num_rows($check_user)>0)
{
    $user = mysqli_fetch_assoc($check_user);
    mysqli_query($connect, "INSERT INTO `log` (`id`, `error`, `login`, `ip`, `date`)
    VALUES (NULL, 'Авторизация', '$login', '$ip', NOW() )");

    print_r($check_user);
    $_SESSION['user'] = 
    [
        "id"=>$user['id'],
        "login"=>$user['name'],
        "avatar"=>$user['avatar'],
        "status"=>$user['status'],
        "role"=>$user['role']
    ];
    header('Location: ../index.php');
}
else {
    mysqli_query($connect, "INSERT INTO `log` (`id`, `error`, `login`, `password`, `ip`,`date`)
    VALUES (NULL, 'Попытка авторизации', '$login','$password', '$ip', NOW() )");   
    $_SESSION['sms']='Не верный <br> логин или пароль'; 
    header('Location: autorization.php');
}
?>