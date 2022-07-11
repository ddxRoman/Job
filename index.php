<? require_once "function/checkaut.php";
require_once "function/checkrole.php";
require_once "action/connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image" href="file/icons/general.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/button.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medcloud</title>
</head>

<body>
    <div class="all">
        <div class="header">
            <div class="CSD">
                <? require_once "folders/CSD.php"; ?>
            </div>
            <div class="knowledge">
                <a href="https://helper.bizonoff-dev.net/admin/projects/medcloud/knowledge-bases/dokumentatsiia-funktsionala" target="_blank">
                    <button class="MD">MEDCLOUD</button> </a>
            </div>
            <div class="Right_head">
                <? require_once "action\profileindex.php"; ?>
            </div>
        </div> 
        <div class="MisPanel">
        <a href="https://lis.knpumbl.medcloud.pro/" target="_blank"><button>KNPUMBL</button></a>
        <a href="https://docs.google.com/spreadsheets/d/1nWD1hnmjc_pc7LWvE3E6shFtQgtgcZKV80Tmjt4dvmM/edit#gid=0" target="_blank"><button>Задачи</button></a>
        <a href="https://docs.google.com/spreadsheets/d/1f6g5RMrzm2Gn0KAlKBroDGILou2tWEqRqbYQOBQaDqA/edit#gid=38707061" target="_blank"><button>Впровадження</button></a>
        <a href="https://docs.google.com/spreadsheets/d/1UFitKlsbTb7Iu5thfGb4YPRPj27RckkjRg_g_kg6Cas/edit#gid=0" target="_blank"><button>ЧекЛист</button></a>
            
        </div>
        <hr class="misPanel-hr" width="85%">
        <div class="body">
            <div class="lmenu">
                <div class="links">
                    <a href="folders/docs.php" target="1"><button>Доки</button></a><br>
                    <a href="folders/helper.php" target="1"><button>Хелпер</button></a><br>
                    <a href="folders/mis.php" target="1"><button>Миски</button></a><br>
                    <a href="https://drive.google.com/drive/folders/1qsLCeBDutlGuMfTqMoVAyzQQkY1jCHwH" target="_blank"><button>Доки папка</button></a><br>
                    <a href="https://drive.google.com/drive/folders/18AlQjy7OemvXCSv0E2XLp8KGJYvkrsIQ" target="_blank"><button>Анализаторы
                    </button></a><br>
                </div>
            </div>
            <div class="container">
                <iframe name="1" src="">
                </iframe>
            </div>
            <div class="rmenu">
                <?php if ($_SESSION['user']['status'] == 9) { ?>
                    <iframe name="task" src="Taskmanager/Task.php">
                    </iframe>
                <?  } else {

                ?><div class="rmenu"><iframe name="" src=""></iframe></div>
                <?
                }
                ?>
            </div>
        </div>
        <hr class="footer-hr">
        <div class="footer">
        <a href="Taskmanager/Test.php" target="_blank">  <div></div></a>
            <div class="refresh">
            </div>
            <div id="clock" class="clock"></div>
            <script src="JavaScript/clock.js"></script>
        </div>
    </div>
</body>
</html>