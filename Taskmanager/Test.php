<!doctype html>
<html lang="ru">
<head>
    <link rel="stylesheet" type="text/css" href="../css/styleaccordion.css">
    <link rel="stylesheet" type="text/css" href="../css/button.css">
    <link rel="stylesheet" type="text/css" href="../css/navBar.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Taskmanager</title>
</head>

<body>
<div class="taskheader">
    <!------------------------------------------------------------------------->

    <!------------------------------------------------------------------------->


       <a href="../folders/newTask.php"><button class="addtask" title="Добавить задачу">+</button></a> 
    </div>
<?php
 require_once '../action/connect.php';
 $product =mysqli_query($connect, "SELECT * FROM `tasks` ORDER BY `status` ASC ");
 $product=mysqli_fetch_all($product);
 foreach($product as $products){   
     ?>
    <script src="../JavaScript/accordion.js"></script>
    <div id="accordion" class="accordion" style="max-width: 30rem; margin: 1rem auto;">
        <div class="accordion__item">
                <? if($products[3]!=1){?>
                    <div class="accordion__header">
               <p class="number" > №  <?= $products[0]  ?> : </p>  <p class="nametasks"><?=  $products[1] ?></p>
            </div>
            <div class="accordion__body">
            <form action="../action/statusTask.php?id=<?= $products[0] ?>" method="post" name="form">
<select name="currency" onchange="this.form.submit()">
<? if($product[3]!=0){ ?>
    <option value="0">Актуально</option>
<option value="1">Закрыто</option>

<?}?>
</select>
<a href="../action/editTask.php?id=<?= $products[0] ?>"><img width="16px" height="16px" src="../file/icons/edit.png"></a>
<select name="priority" onchange="this.form.submit()">
<? if($products[5]==0){?>
<option value="0">Backlog</option>
<option value="1">Надо сделать</option>
<option value="2">Нет знаний</option>
<?
}
else if($products[5]==1){?>
<option value="1">Надо сделать</option>
<option value="0">Backlog</option>
<option value="2">Нет знаний</option>
<?
}
else if($products[5]==2){?>
<option value="2">Нет знаний</option>
<option value="1">Надо сделать</option>
<option value="0">Backlog</option>
<?
}?>
</select>
<font class="owner">  <? echo $products[4];?> </font> 
</form>
                <div class="accordion__content">
                <?=  $products[2] ?>
                </div><?}
                else{?>
                <div style="background-color:#49ad1a;" class="accordion__header">
                    <p class="number" > №  <s> <?= $products[0]  ?> : </p>  <p class="nametasks"><?=  $products[1] ?></s></p>
                    </div>
                    <div class="accordion__body">
                    <form action="../action/statusTask.php?id=<?= $products[0] ?>" method="post" name="form">
<select name="currency" onchange="this.form.submit()">
<? if($product[3]!=0){?>
    <option value="1">Закрыто</option>
<option value="0">Актуально</option>
<?}?>
</select>
<font class="owner">  <? echo $products[4];?> </font> 
</form>
                        <div color="yellow" class="accordion__content_close">
                        <?=  $products[2] ?>
                        </div><?
                }?>
            </div>
        </div>
        <?}?>
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

