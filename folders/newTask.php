<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="taskheader">
        <a href="../Taskmanager/Task.php"><img class="return" src="../file/icons/return.png" ></a>
    </div>
    <div class="taskadd">
    <form action="/action/addtask.php" method="POST" >
    <input required type="text" name="name" placeholder="Введите название"><br>
    <label>Суть задачи:</label><br>
    <textarea required type="text" name="body"></textarea><br>
<button type="submit">Сохранить</button>
    </form>
    </div>
</body>
</html>
