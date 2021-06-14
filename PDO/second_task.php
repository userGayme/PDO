<?php
include 'container.php';
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PDO</title>
    <style>
        th,td{
            padding: 10px;
        }
        th{
            background: dimgray;
        }
        td{
            background: darkgrey;
        }
    </style>
</head>

<body>
    <form method="REQUEST" action = "proc1.php">
        <p>Начало периода: <input type = "datetime-local" name = "start"> </p>
        <p>Конец периода: <input type = "datetime-local" name = "finish"> </p>
        <input type="submit" value="Вывести активность">
    </form>

   
</body>
</html>