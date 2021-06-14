<?php
include "container.php";
include "connection.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PDO</title>
</head>

<body>
    <ul>
        <?php
        $stmt = $pdo->query($third_request);
        while ($row = $stmt->fetch())
        {   
        ?>
             <il><p><?= $row['name'] . " - баланс: " . $row['balance']."\t" ?></p></il>
        <?php
        }
        ?>
    </ul>
</body>

</html>
