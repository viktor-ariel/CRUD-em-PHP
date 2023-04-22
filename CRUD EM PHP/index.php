<?php
    include_once('config/conexao.php');
    include_once('model/usuario.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>CRUD 2023</title>
</head>
<body>
    <form actiom="" method="POST">

        <label for="">E-mail</label>
        <input type="text" name="email">
        
        <label for="">Senha</label>
        <input type="text" name="senha">
        
        <input type="submit" value="logar" name="enviarLogin">
    </form>
</body>
</html>