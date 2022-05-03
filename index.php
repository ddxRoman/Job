
<? require_once "function/checkaut.php"; require_once "function/checkrole.php"; require_once "action/connect.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
  <link rel="icon" type="image" href="pics/ICO.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image" href="file/icons/general.png">
          <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medcloud</title>
</head>


<body>
    
    <div class="all">
        <div class="header">
        <div class="CSD">
      <?  require_once "folders/CSD.php";?>
            </div>
            
            <div class="knowledge">
                <a href="https://helper.bizonoff-dev.net/admin/projects/medcloud/knowledge-bases/dokumentatsiia-funktsionala" target="_blank">
                    <button class="MD">MEDCLOUD</button> </a>
            </div>
                        <div class="Right_head">
           <? require_once "action\profileindex.php"; ?>
                </div>
        </div>

        <hr width="85%">
        <div class="body">
            <div class="lmenu">
                <div class="links">
                    <a href="folders/favorites.php" target="1"><button>Избранное</button></a><br>
                    <a href="folders/docs.php" target="1"><button>Доки</button></a><br>
                    <a href="folders/helper.php" target="1"><button>Хелпер</button></a><br>
                    <a href="folders/mis.php" target="1"><button>Миски</button></a><br>
                    <a href="https://docs.google.com/spreadsheets/d/1nWD1hnmjc_pc7LWvE3E6shFtQgtgcZKV80Tmjt4dvmM/edit#gid=0" target="_blank"><button>Задачи</button></a><br>
                    
                </div>
            </div>
            <div class="container">
                <iframe name="1" src="">
                </iframe>
            </div>
            <div class="rmenu">
            <?php if($_SESSION['user']['status']==9){?>
            <iframe name="task" src="Taskmanager/Task.php">
            </iframe>
      <?  } 
            else{
                ?><div class="rmenu"><iframe name="task" src=""></iframe></div>
                <?
                }
            ?>
            </div> 
        </div>
        <div class="footer"> 
            <div></div>
        <div class="refresh">
        </div>
        <div id="clock" class="clock"></div>	
        <script src="JavaScript/clock.js"></script>
    </div>
    </div>
</body>
</html>