<?php
session_start();

// header ('Location: ../index.php');
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
    <div class="full_profile_page">
   <div class="Ava_profile_page"><img src="<?=$_SESSION['user']['avatar']?>">
   <div class="edit_profile"><button type="file" name="avatar"><img src="../file/icons/ava_logo.png"></a></button></div></div>
    <div class="date_profile_page">  <?=$_SESSION['user']['login']?><br>
   <font color="4C4F6B"><b><?=$_SESSION['user']['role']?></b></font>  <br><br></div>  
  <div><a href="../index.php"><button>За работу</button></a></div>
    </div>
</body>
</html>


        