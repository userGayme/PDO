<?php
    $host = '127.0.0.1:3305';
    $db   = 'lb5v8';
    $user = 'root';
    $pass = 'root';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
   
    $pdo = new PDO($dsn, $user, $pass);