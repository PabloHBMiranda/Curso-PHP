<?php
    $pdo = new PDO('mysql:host=localhost;dbname=modulo8', 'root', '');
    $id = 3;
    $sql = $pdo->prepare("UPDATE `clientes` SET nome='Arroz',sobrenome='Zoe'
                           WHERE id=$id");
    if($sql->execute()){
        echo 'Meu cliente foi atualizado com sucesso';
    }
?>