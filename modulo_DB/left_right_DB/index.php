<?php
    $pdo = new PDO('mysql:host=localhost;dbname=db_teste', 'root', '');
    $sql = $pdo->prepare("SELECT * FROM `clientes` LEFT JOIN `cargos` ON `clientes`.`cargo` = `cargos`.`id`");
    $sql->execute();
    $clientes = $sql->fetchAll();
    foreach ($clientes as $key => $value){
        echo "<pre>";
        print_r($value['nomes']);
        echo " | ";
        print_r($value['nome_cargo']);
    }
?>