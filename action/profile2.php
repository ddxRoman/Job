<?php
session_start();

header ('Location: ../index.php');
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
   <!-- <a href="../index.php"><button>За работу</button></a>
   <a href="action/logout.php"><button>Exit</button></a>  -->
    </div>
</body>
</html>
