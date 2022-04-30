<?php
$id=1;
require_once '../action/connect.php';
$res = mysqli_query($connect, "SELECT * FROM `tasks` WHERE 1");
$tasks = mysqli_fetch_assoc($res);


?>
<!doctype html>
<html lang="ru">
<head>
    <link rel="stylesheet" type="text/css" href="../css/styleaccordion.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Taskmanager</title>
</head>

<body>
    <script src="../JavaScript/accordion.js"></script>
    <div id="accordion" class="accordion" style="max-width: 30rem; margin: 1rem auto;">
        <div class="accordion__item">
            <div class="accordion__header">
               <p class="number" > №<?php  print_r ($tasks['id']); ?> : </p>  <p class="nametasks"><?php  print_r ($tasks['name']); ?></p>
            </div>
            <div class="accordion__body">
                <div class="accordion__content">
          <?php  print_r ($tasks['contant']); ?>
                </div>
            </div>
        </div>
        <div class="accordion__item">
            <div class="accordion__header">
            <p class="number" > №2 </p> </p><p class="nametasks">Корректный вывод задач </p>
            </div>
            <div class="accordion__body">
                <div class="accordion__content">
                Сделать что бы кнопок было столько же сколько и заданий, можно получить количество строк из БД, и через цикл
                рисовать тут блоки с заданиями
     
                </div>
            </div>
        </div>
        <div class="accordion__item">
            <div class="accordion__header">
            <p class="number" > №3 </p>  <p class="nametasks">Добавление тасков</p>
            </div>
            <div class="accordion__body">
                <div class="accordion__content">
                Нужно сделать добавление тасков сюда, по форме это можно сделать, данное окно это фрейм, можно сделать кнопку
и по этой кнопке кидать на новую страницу (Сюда же во фрейм) и в ней поля с добавлением в Базу данных
          </div>
            </div>
        </div>
    
    <div class="accordion__item">
            <div class="accordion__header">
            <p class="number" > №4 </p>  <p class="nametasks">Права доступа</p>
            </div>
            <div class="accordion__body">
                <div class="accordion__content">
                Сделать доступы, по авторизации, но как? Только через if И header?
          </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        new ItcAccordion(document.querySelector('.accordion'), {
            alwaysOpen: true
        });
    </script>

</body>

</html>