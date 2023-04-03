<html><a href="/blocks/SQL/action/tablework.php"><img src="/pictures/back.png" width="26px" height="26px"></a>
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);//Вывод реальных ошибок
require_once 'action/connect.php';
$product_id = $_GET['id'];
$product = mysqli_query($connect, "SELECT*FROM `todo` WHERE `id`='$product_id'");
$product = mysqli_fetch_assoc($product);


?>

<head>
    <link rel="stylesheet" type="text/css" href="/blocks/SQL/style.css">
</head>

<body>
    <h1>Данные по <?= $product_id?></h1>
    
    <font class="info"><strong>Идентификатор внутри системы: </strong><?= $product['id'] ?><br></font>
    <font class="info"><strong>Имя:</strong> <?= $product['name'] ?><br></font>
    <font class="info"><strong>Пароль:</strong> <?= $product['contant'] ?><br></font>
<h1>CLOCK:</h1>
    <div id="clock"></div>

<script>
function update(){
    let date=new Date();
    let hours=date.getHours();
    let minutes=date.getMinutes();
    let seconds=date.getSeconds();
    if(hours<10) hours='0'+hours;
    if(minutes<10) minutes='0'+minutes;
    if(seconds<10) seconds='0'+seconds;
    clock.textContent = `${hours}:${minutes}:${seconds}`;
    
}
setInterval(update, 1000);
</script>


</body>





</html>