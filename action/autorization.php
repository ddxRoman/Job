<?php
session_start();
if($_SESSION['user']) header('Location: ../index.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <style>
body{
  background: linear-gradient(90deg, blue, pink);
}
</style>
    <div class="allAutorize">
        <img width="px" height="240px" src="../file/icons/Logo.png">
    <div class="autorize">
    <form action="signin.php" method="post">
    <input type="text" name="login" placeholder="Логин"><br>
    <input type="password" name="password" placeholder="Пароль"><br>
<button type="submit">Get to work</button>
</form>
</div>
</div>

</body>
</html>