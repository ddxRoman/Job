<?
require_once "function/checkaut.php";
require_once "function/checkrole.php";
require_once "action/connect.php";
// require_once "function/profilecheck.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image" href="file/icons/general.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/style_redesign.css"> -->
    <link rel="stylesheet" type="text/css" href="css/button.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medcloud</title>
</head>

<body>
    <div class="all">
        <!-- Общий блок на всю страницу-->
        <div class="header">
            <!-- Общий Блок на шапку-->
            <div class="CSD">
                <!-- Блок С полями в левом верхнем углу-->
                <? require_once "folders/CSD.php"; ?>
                <!-- Подключение файла в котором поля с нашими заказами-->
            </div>
            <div class="knowledge">
                <!--  Просто кнопка на Хелпер -->
                <a href="https://helper.bizonoff-dev.net/admin/projects/medcloud/boards/razrabotka-medklaud?display=list&by_desc=true&create=true" target="_blank">
                    <!--  Просто кнопка на Хелпер -->
                    <button class="MD">MEDCLOUD</button>
                </a><!--  Просто кнопка на Хелпер -->
            </div><!--  Просто кнопка на Хелпер -->
            <div class="Right_head">
                <!-- Правый верхний блок с профилем-->
                <? require_once "action\profileindex.php"; ?>
                <!-- Просто подключение другого файла в этот блок-->
            </div><!-- Правый верхний блок с профилем-->
        </div> <!-- Конец хедера-->
        <div class="MisPanel">
            <!-- Тут начинает МИС панель.-->
            <a href="https://docs.google.com/spreadsheets/d/1f6g5RMrzm2Gn0KAlKBroDGILou2tWEqRqbYQOBQaDqA/edit#gid=38707061" target="_blank"><button>Впровадження</button></a>
            <a href="https://mail.google.com" target="_blank"><button>Почта</button></a>
            <a href="https://docs.google.com/spreadsheets/d/1UFitKlsbTb7Iu5thfGb4YPRPj27RckkjRg_g_kg6Cas/edit" target="_blank"><button>ЧекЛист</button></a>
            <a href="https://docs.google.com/spreadsheets/d/1buvZRD-C-CK60GxRqRZjGVERsNOtAvi8hp8gR9OQXtA/edit#gid=0" target="_blank"><button>Трекинг</button></a>
            <a href="https://docs.google.com/spreadsheets/d/19YQTTlq0D1Cr2q7G54SXC0jGG9MrvUurH6YdhfSX8Wc/edit#gid=0" target="_blank"><button>Трекинг Владе</button></a>
            <a href="https://docs.google.com/spreadsheets/d/1831n04opuq0QCen2fzRKy6H8lgLxIxD5sODwKxvh6s4/edit#gid=479952363" target="_blank"><button>Шорт Аналики</button></a>

        </div><!-- Тут заканчивается МИС панель-->
        <hr class="misPanel-hr" width="85%"><!-- ХРка полоска -->
       <div class="body">   <!-- Начало Тела сайта -->
            <div class="lmenu"> 
                <div class="links">
                    <a href="folders/docs.php" target="1"><button>Доки</button></a><br>
                    <a href="folders/helper.php" target="1"><button>Хелпер</button></a><br>
                    <a href="/folders/GooglFolders.php" target="1"><button>Папки</button></a><br>
                    <a href="folders/Backlog.php" target="1"><button>Старье</button></a><br>
                    <a href="folders/mis.php" target="1"><button>Миски</button></a><br>
                    <a href="https://master-gadget.ru/"><button>MG</button></a><br>
                    <a href="https://docs.google.com/spreadsheets/d/1NfndicVea-VHRsdQBzZtBHAiQFsy-qO1WTPiGBF8jVo/edit#gid=1861358479" target="_blank"><button class="document">БАГИ</button></a><br>
                    <a href="https://docs.google.com/spreadsheets/d/1mFn7zDyJ47eAOvhSJ-e8eDeBEnwHVbKv/edit#gid=1585440672" target="_blank"><button class="document">МояДока</button></a>
                </div>
            </div>
            <div class="container">
                <iframe name="1" src="">
                </iframe>
           
            </div>
            <?php if ($_SESSION['user']['status'] == 9) { ?><!-- Берем Роль пользователя и проверяем если она равно 9 (у нас это админ) то показываем Правое меню-->
                <div class="rmenu">
                    <iframe name="task" src="Taskmanager/Task.php">
                    </iframe>
                </div>
            <?  } else {
            ?><div class="not-visible-rmenu"><iframe name="" src=""></iframe></div>
            <?
            }
            ?>
            <!-- </div> -->
        </div>
        <hr class="footer-hr">
        <div class="footer">
            <a href="Taskmanager/Task.php" target="_blank">
                <div></div>
            </a>
            <div class="refresh">
            <p class="ink"><a href="Test.php"><img src="file\icons\Logo.png" alt="test"></a><br>
                 ORStudio <br> Оксентий Роман Сергеевич Студио <br> Copyright 2022-2023 </p>
            </div>
            <div id="clock" class="clock">         
            <script src="JavaScript/clock.js">
            </script> <!-- Подключение файла с часами-->
            </div><!-- ЧАСЫ-->
        </div>
    </div>
</body>

</html>