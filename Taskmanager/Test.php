<?php

function comm()
{
            require_once '../action/connect.php'; // Проверка подключения к БД
            $product = mysqli_query($connect, "SELECT * FROM `tasks` ORDER BY `status` ASC, `date_close` DESC "); // Подключение к определенной таблице, и получение Статуса записи
            $product = mysqli_fetch_all($product); // Выбирает все строки из набора $product и помещает их в массив  $product
            $comment = mysqli_query($connect, "SELECT * FROM `comments` ORDER BY `id` ASC "); // Подключение к определенной таблице, и получение Статуса записи
            $comment = mysqli_fetch_all($comment); // Выбирает все строки из набора $Comment и помещает их в массив  $Comments
            ?><div class="comments-block"><?
    foreach ($comment as $comments) { // Перебор массива $ c его записью в массив $
        if ($comments[1] == $products[0]) {//Проверяем если айди таска комента равно айди самого таска то выводим его
            echo ($comments[3] . " " . $comments[4] . "<br><hr>" . $comments[2]  . "<a href='$comments[5]'><img src='$comments[5]' class='pictures-in-tasks'></a> <hr class='end-comments'>");
        }
    } ?>
<form action="../action/addComents.php" method="post" enctype="multipart/form-data">
<textarea class="add-comments" name="contant"></textarea><br>
<input type="file" name="picture"><br>
<input type="hidden" name="id_task" value="<?= $products[0] ?>">
<button>Добавить</button>
</form>
</div>
<?
return $comment. $comments. $product;
}

comm($A,$B,$C);
echo $A, $B,$C;

?>