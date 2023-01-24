<?php
    $pdo = new PDO('mysql:host=localhost;dbname=modulo8', 'root', '');
    $sql = $pdo->prepare("SELECT * FROM `clientes` WHERE `sobrenome` LIKE '%o%'");
    $sql->execute();
    $emails = $sql->fetchAll();
    echo "<pre>";
    print_r($emails);
    exit();
?>
