<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo8', 'root', '');
//$sql = $pdo->prepare("SELECT * FROM `clientes` WHERE `id` IN (1,5)");
$sql = $pdo->prepare("SELECT * FROM clientes WHERE data BETWEEN '2017-01-01' AND '2023-12-31'");
$sql->execute();
$coisas = $sql->fetchAll();
echo "<pre>";
echo "ARRRRROZZZZZ";
print_r($coisas);
?>
