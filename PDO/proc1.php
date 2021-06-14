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
    <?php
    if(isset($_REQUEST['start'])){
        $start = $_REQUEST['start'];
        $start = str_replace('T',' ',$start);
    }
    if(isset($_REQUEST['finish'])){
        $finish = $_REQUEST['finish'];
        $finish = str_replace('T',' ',$finish);
    }
    if(isset($start) && isset($finish)){
        echo $start."</br>";
echo $finish;
        ?>

        <table>
        <tr>
            <th>Начало сеанса</th>
            <th>Конец сеанса</th>
            <th>Входящие данные, МБ</th>
            <th>Выходящие данные, МБ</th>
        </tr>

        <?php 
    $std = $pdo->prepare($second_request);
    $std->execute(array('start' => $start,'finish' => $finish));
     while($row = $std->fetch()){
    ?>
    <tr>      
                <td><?= $row['start'] ?></td>
                <td><?= $row['stop'] ?></td>
                <td><?= $row['in_trafic'] ?></td>
                <td><?= $row['out_trafic'] ?></td>
            </tr>
    
    <?php
        }
    }
    ?>
    </table>
</body>