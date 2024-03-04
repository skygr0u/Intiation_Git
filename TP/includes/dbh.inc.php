<?php

    $dsn = "mysql:host=localhost;dbname=livredor";
    $dbname = "root";
    $dbpwd = "";

    try {
        $pdo = new PDO($dsn, $dbname, $dbpwd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection Failed!". $e->getMessage();
    }



?>