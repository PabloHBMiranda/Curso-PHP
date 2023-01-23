<?php
    $pdo = new PDO('mysql:host=localhost;dbname=db_teste','root','');
    $sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY cargo ORDER BY nome DESC LIMIT 1");
    $sql->execute();
    $clientes = $sql->fetchAll();


    echo "<pre>";
    print_r($clientes);
    exit();
?>