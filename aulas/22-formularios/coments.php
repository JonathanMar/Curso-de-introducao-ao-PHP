<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Form</title>
</head>
<body>

<?php
    include("..\aulas\menu.php");
?>

<p>
    <form action="dados.php" method="POST">
        Nome: <input type="text" name="nome"><br>
        Email: <input type="email" name="email"><br>
        <button type="submit"> Enviar </button>
    </form>
</p>

<p>
    <form action="dados.php" method="GET">
        Nome: <input type="text" name="getNome"><br>
        Email: <input type="email" name="getEmail"><br>
        <button type="submit"> Enviar </button><br>
    </form>

    <a href="dados.php?idade=25&sobrenome=Santos"> Enviar Dados </a>
</p>
    
</body>
</html>