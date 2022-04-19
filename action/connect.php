<?php
$connect = mysqli_connect('localhost', 'root','qazwsx','medcloud');
if(!$connect){
    echo"<p class='err'>Не удалось подключиться</p>";
}

?>