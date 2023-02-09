  <body>
   
    <div class="okno">
      Всплывающее окошко!
    </div>

    <?php session_start(); ?>
<!doctype html>
<html lang="ru">

<head>
    <link rel="stylesheet" type="text/css" href="../css/styleaccordion.css">
    <link rel="stylesheet" type="text/css" href="../css/button.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/style_redesign.css"> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>werTaskmanager</title>


    <style>
      .okno {
        width: 300px;
        height: 50px;
        text-align: center;
        padding: 15px;
        border: 3px solid #0000cc;
        border-radius: 10px;
        color: #0000cc;
      }
    </style>


</head>

<body>
    <?php if ($_SESSION['user']['status'] == 9) { ?>
        <div class="taskheader">
            <a href="../folders/newTask.php"><button class="addtask" title="Добавить задачу">+</button></a> <!-- Кнопка добавления таски-->
        </div>
        <?php
        require_once '../action/connect.php'; // Проверка подключения к БД
        $product = mysqli_query($connect, "SELECT * FROM `tasks` ORDER BY `status` ASC "); // Подключение к определенной таблице, и получение Статуса записи
        $product = mysqli_fetch_all($product); // Выбирает все строки из набора $product и помещает их в массив  $product
        $k = 0;
        foreach ($product as $products) { // Перебор массива $product c его записью в массив $productS
            $k++; ?>
            <script src="../JavaScript/accordion.js"></script> <!-- Cкрипт аккордиона-->
            <div id="accordion" class="accordion" style="max-width: 30rem; margin: 1rem auto;"> <!-- общий див всего акордиона-->
                <div class="accordion__item">
                    <!-------------------------------------------- Проверяем если статус задачи 0, то выводим эти результаты----------------------------->
                    <? if ($products[3] == 0) { ?>
                        <div class="accordion__header"> <!-- Верхний див где номер таски и имя -->
                            <p class="number"> № <?= $products[0]  ?> : </p>
                            <p class="nametasks"><?= $products[1] ?></p>
                        </div>
                        <div class="accordion__body">
                            <form action="../action/statusTask.php?id=<?= $products[0] ?>" method="post" name="form"> <!-- форма с селектами-->
                                <select name="currency" onchange="this.form.submit()">
                                    <? //if ($product[3] == 0) { 
                                    ?> <!-- Проверяем если статус задачи 1 то выводим Селект где первая запись Активный  -->

                                    <option value="0">Актуально</option>
                                    <option value="1">Выполнено</option>
                                    <option value="2">Не актуально</option>
                                    <? //}
                                    ?>
                                </select>
                                <a href="../action/editTask.php?id=<?= $products[0] ?>"><img width="16px" height="16px" title="Редактировать" src="../file/icons/edit.png"></a> <!-- Кнопка редактировать -->
                                <select name="priority" onchange="this.form.submit()"><!-- Селект с сортировкой Статусов задач, выглядит как хуйня, надо переделать что бы тут был запрос и с запроса шел этот статус-->
                                    <? if ($products[5] == 0) { ?>
                                        <option value="0">Backlog</option>
                                        <option value="1">Надо сделать</option>
                                        <option value="2">Нет знаний</option>
                                    <?
                                    } else if ($products[5] == 1) { ?>
                                        <option value="1">Надо сделать</option>
                                        <option value="0">Backlog</option>
                                        <option value="2">Нет знаний</option>
                                    <?
                                    } else if ($products[5] == 2) { ?>
                                        <option value="2">Нет знаний</option>
                                        <option value="1">Надо сделать</option>
                                        <option value="0">Backlog</option>
                                    <?
                                    } ?>
                                </select>
                                <a a href="/action/delete_task.php?id=<?= $products[0] ?>"><img src="/file/icons/delete.png" width="16px" height="16px"></a>
                                
                               
                            </form>
                            <div class="accordion__content">
                                <?= $products[2] ?>
                                      
    <a href="#" id="main">
      <div id="okno">
        Всплывающее окошко!
      </div>
    </a>
     
    <a href="#main">Вызвать всплывающее окно</a>
 
                            </div>
                            <a title="Профиль автора" href="/action/profile2.php" target="_blank">
                                    <font class="owner"> <? echo $products[4]; ?> </font>
                                </a>

                                <font class="creation_date">Создано: <?= $products[6] ?></font>

                        <? } // Тут мы закрыли первую проверку, на то статус 0 Актуальный 

                    else  if ($products[3] == 1) {  ?>
                            <!---------------------------  Тут мы начали вторую проверку, на то статус 1 Закрыто---------------------------------->
                            <div style="background: linear-gradient(45deg, #58c436, #7ed66a, #b4e3ac, #e9ffe5);" class="accordion__header">
                                <p class="number"> № <s> <?= $products[0]  ?> : </p>
                                <p class="nametasks"><?= $products[1] ?></s></p>
                            </div>
                            <div class="accordion__body">
                                <form action="../action/statusTask.php?id=<?= $products[0] ?>" method="post" name="form">
                                    <select name="currency" onchange="this.form.submit()">

                                        <option value="1">Выполнено</option>
                                        <option value="2">Не актуально</option>
                                        <option value="0">Актуально</option>

                                    </select>

                                </form>
                                <div color="yellow" class="accordion__content">
                                    <?= $products[2] ?>
                                </div>                                
                                
                            
                            <a title="Профиль автора" href="/action/profile2.php" target="_blank">
                                    <font class="owner"> <? echo $products[4]; ?> </font>
                                </a>

                                <font class="creation_date">Создано: <?= $products[6] ?></font> <br>
                                <font class="creation_date">Закрыто: <?= $products[7] ?></font>

                            <?
                        }  // Тут мы закрыли вторую проверку, на то статус 1 Закрыто 
                        else if ($products[3] == 2) { ?>

                                <div style="background: linear-gradient(45deg, #7a7a22, #bdba64, #e3e3ac, #ffffe5);" class="accordion__header">
                                    <p class="number"> № <s> <?= $products[0]  ?> : </p>
                                    <p class="nametasks"><?= $products[1] ?></s></p>
                                </div>
                                <div class="accordion__body">
                                    <form action="../action/statusTask.php?id=<?= $products[0] ?>" method="post" name="form">
                                        <select name="currency" onchange="this.form.submit()">
                                            <option value="2">Не актуально</option>
                                            <option value="1">Выполнено</option>
                                            <option value="0">Актуально</option>

                                        </select>

                                    </form>

                                    <div color="yellow" class="accordion__content">
                                        <?= $products[2] ?>
                                    </div>
                                    <a title="Профиль автора" href="/action/profile2.php" target="_blank">
                                    <font class="owner"> <? echo $products[4]; ?> </font>
                                </a>

                                <font class="creation_date">Создано: <?= $products[6] ?></font>

                                <? }

                                ?>


                                <script>
                                    new ItcAccordion(document.querySelector('.accordion'), {
                                        alwaysOpen: true
                                    });
                                </script>

                                </div>
                            </div>
                        <? }

                    if ($product[3] == 1) {
                        echo ('AAAa go home nigga');
                    } else ?>

                        </div>


                    <?
                } else {
                    header('Location: ../action/NoRules.php');
                }
                    ?>
</body>

</html>