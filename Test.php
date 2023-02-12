<?php session_start(); ?>

        <?php
        require_once 'action/connect.php'; // Проверка подключения к БД
        $product = mysqli_query($connect, "SELECT * FROM `tasks` ORDER BY `status` ASC "); // Подключение к определенной таблице, и получение Статуса записи
        $product = mysqli_fetch_all($product); // Выбирает все строки из набора $product и помещает их в массив  $product
        $comment = mysqli_query($connect, "SELECT * FROM `comments` ORDER BY `id` ASC "); // Подключение к определенной таблице, и получение Статуса записи
        $comment = mysqli_fetch_all($comment); // Выбирает все строки из набора $product и помещает их в массив  $product
        foreach ($product as $products) {

            echo("Id Users-".$products[0]."<br>");
        foreach ($comment as $comments) { // Перебор массива $ c его записью в массив $
        if($comments[1]==$products[0]){
           echo($comments[2]."<br>");}
    
        }
    }
?>