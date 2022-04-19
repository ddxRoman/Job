<?php
session_start();
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
   <div class="Ava"><img src="<?=$_SESSION['user']['avatar']?>" width="50px"></div>
    <div class="date">  <?=$_SESSION['user']['login']?><br>
   <b><?=$_SESSION['user']['role']?></b> <br></div>  
    </div>
</body>
</html>