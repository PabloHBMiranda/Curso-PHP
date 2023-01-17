<?php
    date_default_timezone_set('America/Sao_Paulo');
    $pdo = new PDO('mysql:host=localhost;dbname=modulo8', 'root', '');

    if (isset($_POST['acao'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $momento_registro = date('Y-m-d H:i:s');
        $sql = $pdo->prepare("INSERT INTO clientes VALUES (null,?,?,?)");
        $sql->execute(array($nome,$sobrenome,$momento_registro));
        echo "Cadastro Realizado com Sucesso!";
    }
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro no Banco de Dados</title>
</head>
<body>
    <form method="post">
        <input type="text" name="nome" required/>
        <input type="text" name="sobrenome" required/>
        <input type="submit" name="acao" value="Enviar!"/>
    </form>

</body>
</html>
