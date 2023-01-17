<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo8', 'root', '');
$id = 3;
$sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=3");
if($sql->execute()){
    echo 'Meu cliente foi deletado com sucesso';
}
?>