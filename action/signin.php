<?php
session_start();
 require_once'connect.php';
$login=$_POST['login'];
$password=$_POST['password'];
$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `name`='$login' AND `password` = '$password' ");

echo "Логин-".$login."<br>"." Пароль-".$password;

if(mysqli_num_rows($check_user)>0)
{
    $user = mysqli_fetch_assoc($check_user);
    print_r($check_user);
    $_SESSION['user'] = 
    [
        "id"=>$user['id'],
        "login"=>$user['name'],
        "avatar"=>$user['avatar'],
        "status"=>$user['status'],
        "role"=>$user['role']
    ];
     header('Location: profile2.php');
}


else {
    echo"Есть ошибка";
    $_SESSION['sms']='Или пароль, или логин, не понятно что.';
}

?>