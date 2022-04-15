<?php
$connect = mysqli_connect('localhost', 'root','qazwsx','firstdb');
if(!$connect){
    echo"<p class='err'>Не удалось подключиться</p>";
}
?>