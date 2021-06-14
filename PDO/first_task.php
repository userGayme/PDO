<?php
include 'connection.php';
include 'container.php';
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

<form method="POST">
    <select name = "id" size = 1 >
        <?php
        $seance = $pdo->query($form_request);
        while($row = $seance->fetch()) {
            ?>
            <option value=<?= $row['ID_CLIENT'] ?>><?=  $row['name'] ?></option>
            <?php
        }
        ?>
    </select>
    <br><input type="submit" name="send" value="Показать результаты">
</form>


<?php
if(isset($_POST["id"]))
{
    $id = $_POST["id"];
?>
    <table>
        <tr>
            <th>Начало сеанса</th>
            <th>Конец сеанса</th>
            <th>Входящие данные, МБ</th>
            <th>Выходящие данные, МБ</th>
        </tr>
        <?php

        $st = $pdo->prepare($first_request);
        $st->execute(array($id));
        while($item = $st->fetch()) {
            ?>
            <tr>
                <td><?= $item['start'] ?></td>
                <td><?= $item['stop'] ?></td>
                <td><?= $item['in_trafic'] ?></td>
                <td><?= $item['out_trafic'] ?></td>
            </tr>
            <?php
        }
    }
        ?>
    </table>
</body>
</html>

