<?php
session_start();
if(!$_SESSION['user']){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/profile.css">
</head>

<body>

<style>

</style>


    <div class="autorize">
<form action="action/signin.php" method="post">
    <input type="text" name="login" placeholder="Логин"><br>
    <input type="password" name="password" placeholder="Пароль"><br>
<button class="GO" type="submit">Work</button>
</form>
</div>

</body>
</html>
<?php
}else{
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <div class="full">
   <div class="Ava"><img src="<?=$_SESSION['user']['avatar']?>" width="100%"></div>
    <div class="date">  <?=$_SESSION['user']['login']?><br>
   <font color="4C4F6B"><b><?=$_SESSION['user']['role']?></b></font>  <br></div>  
   <!-- <a href="../index.php"><button>За работу</button></a>-->
   <a class="exit" href="action/logout.php"><button>Выйти</button></a>  
    </div>
</body>
</html>
<? }
