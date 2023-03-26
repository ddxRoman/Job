<?php


$bgColor=$_POST['bg'];
$textColor=$_POST['txtColor']



?>
<style>
    body{
        background-color: <?=$bgColor?>;
        color:<?=$textColor?>;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" name="bg" method="post">
    Select your backgroundcolor: 
    <input name="bg" type="color" value="<?=$bgColor?>"><br>
    Select text color:
    <input name="txtColor" type="Color" value="<?=$bgColor?>"><br>
    <button>ГО</button>
    </form>
</body>
</html>