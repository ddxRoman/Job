<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../css/styleaccordion.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?
    require_once '../action/connect.php'; // Проверка подключения к БД
    $product = mysqli_query($connect, "SELECT * FROM `tasks` ORDER BY `status` ASC, `date_close` DESC "); // Подключение к определенной таблице, и получение Статуса записи
    $product = mysqli_fetch_all($product); // Выбирает все строки из набора $product и помещает их в массив  $product
    $comment = mysqli_query($connect, "SELECT * FROM `comments` ORDER BY `id` ASC "); // Подключение к определенной таблице, и получение Статуса записи
    $comment = mysqli_fetch_all($comment); // Выбирает все строки из набора $Comment и помещает их в массив  $Comments

function comment($products, $comment){?>

    <div class="comments-block"><?
                                   foreach ($comment as $comments) { // Перебор массива $ c его записью в массив $
                                        if ($comments[1] == $products[0]) {//Проверяем если айди таска комента равно айди самого таска то выводим его
                                             echo ($comments[3] . "66666666666666666 " . $comments[4] . "<br><hr>" . $comments[2]  . "<a href='$comments[5]'><img src='$comments[5]' class='pictures-in-tasks'></a> <hr class='end-comments'>");
                                              }
                                    } ?>
                                <form action="../action/addComents.php" method="post" enctype="multipart/form-data">
                                    <textarea class="add-comments" name="contant"></textarea><br>
                                    <input type="file" name="picture"><br>
                                    <input type="hidden" name="id_task" value="<?= $products[0] ?>">
                                    <button>Добавить</button>
                                </form>
                            </div>
<!----------------------------------------Конец пати с комментариями------------------------------------------------------------------>
<?
}

    function stepen($product, $status, $color, $prioritet)
    {
        foreach ($product as $products) { 
    ?><script src="../JavaScript/accordion.js"></script> <!-- Cкрипт аккордиона-->
            <div id="accordion" class="accordion" style="max-width: 30rem; margin: 1rem auto;"> <!-- общий див всего акордиона-->
                <div class="accordion__item"><?
                         if ($products[3] == $status) { ?>
                             <div class="accordion__header" style="<?=$color;?>">
                        <a href="#" target="_blank">
                            <p class="number"> № <?= $products[0] ?>:</p>
                        </a><!-- Вот тут ссылка на весь экран-->
                        <p class="nametasks"><?= $products[1] ?></p>
                        <?
                        if ($products[5] == 0) { // Проверка на приоритет таски, и вывод приоитета возле названия в заголовке
                        ?><font class="prioritet-task0">Backlog</font><?// Проверяем приоритет
                            } else if ($products[5] == 1) { 
                                ?><font class="prioritet-task1">Надо сделать</font> <?
                            
                                    } else if ($products[5] == 2) { 
                                        ?><font class="prioritet-task2">Нет знаний</font>
                             <?}?>
                                                </div>
                                                <div class="accordion__body">
                            <form action="../action/statusTask.php?id=<?= $products[0] ?>" method="post" name="form"> <!-- форма с селектами-->
                            <select name='currency' onchange='this.form.submit()'>
                                     <!-- Проверяем если статус задачи 1 то выводим Селект где первая запись Активный и тд. -->
<? if($products[3]==0){?>
                                 
                                  <option value='0'>Актуально</option>
                                    <option value='1'>Выполнено</option>
                                    <option value='2'>Не актуально</option><?
                                    
}else if($products[3]==1)  {
?>
      <option value='1'>Выполнено</option>
      <option value='0'>Актуально</option>
      <option value='2'>Не актуально</option>
      
<?}else if($products[3]==2){?>

    <option value='2'>Не актуально</option>
    <option value='0'>Актуально</option>
    <option value='1'>Выполнено</option>
    </select><?
}
                                  ?>
                               
                               
                              <!--Селект с сортировкой Статусов задач, выглядит как хуйня, надо переделать что бы тут был запрос и с запроса шел этот статус -->
                                <!-- Я же уже 1 раз проверил приоритет таски-->
                                <select name="priority" onchange="this.form.submit()">
                                <a href="../action/editTask.php?id=<?= $products[0]?>"><img width="16px" height="16px" title="Редактировать" src="../file/icons/edit.png"></a> <!-- Кнопка редактировать -->
                                    <? if ($products[5] == 0) { ?>
                                        <select> 
                                        <option value='0'>Backlog</option>
                                        <option value='1'>Надо сделать</option>
                                        <option value='2'>Нет знаний</option></select> 
                                    <?
                                    } else if ($products[5] == 1) { 
                                      ?>  <select> 
                                        <option value='1'>Надо сделать</option>
                                        <option value='0'>Backlog</option>
                                        <option value='2'>Нет знаний</option></select> 
                                    <?
                                    } else if ($products[5] == 2) { 
                                      ?>  <select> 
                                        <option value='2'>Нет знаний</option>
                                        <option value='0'>Backlog</option>
                                        <option value='1'>Надо сделать</option>
                                        </select> 
                                   <? }?>
                                <form action="../action/accept_delete.php?id=<?= $products[0] ?>" method="post" name="real_delete">
                                    <a href="../action/accept_delete.php?id=<?= $products[0] ?>"><img src="/file/icons/delete.png" width="16px" height="16px"></a>
                                </form>
                            </form>
                            <div class="accordion__content">
                                <?= $products[2] ?> 
                                <a href="<?= $products[8]; ?>" target="_blank"><img class="pictures-in-tasks" src="<?= $products[8]; ?>"></a>
                            </div>
                            <a title="Профиль автора" href="/action/profile2.php?id=<?=$products[4];?>" target="_blank">
                                <font class="owner"> <? echo $products[4]; ?> </font>
                            </a>
                            <font class="creation_date"><b>Создано:</b> <?= $products[6] ?></font>
                            <? 
                                 comment($products, $comment);
}?>
<script>
                                    new ItcAccordion(document.querySelector('.accordion'), {
                                        alwaysOpen: true
                                    });
                                </script>
                </div>
            </div><?

                }
            }
   $color1="background: linear-gradient(45deg, #c436369a, #d0d7d8, #d0d7d8, #d0d7d8, #c4363667)";
   $color2="background: linear-gradient(45deg, #58c436, #7ed66a, #b4e3ac, #e9ffe5)";
   $color3="background: linear-gradient(45deg, #7a7a22, #bdba64, #e3e3ac, #ffffe5)";
            stepen($product, 0, $color1,0);
            stepen($product, 1, $color2,1);
            stepen($product, 2, $color3,2);
                    ?>
</body>
</html>