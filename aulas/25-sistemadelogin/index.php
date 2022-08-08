<?php
    session_start();

    require_once ("bd_login.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
</head>
<body>
    <title>Sistema de Login</title>

    <form action="#" method="post" id="login">
        <label for="usu_login">Login:</label>
        <input type="text" name="usu_login" id="usu_login" required aut>
            <br>
        <label for="usu_password">Senha:</label>
        <input type="password" name="usu_password" id="usu_password" required aut> 
            <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>