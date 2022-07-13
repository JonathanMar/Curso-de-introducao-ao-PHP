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

if(isset($_POST['enviar-formulario'])):
    // Arrays de erros
    $erros=array();

    // Sinitize 
    $nome=filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    echo $nome."<br>";

    $idade=filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    echo $idade."<br>";
        if(!filter_var($idade, FILTER_VALIDATE_INT)):
            $erros[]="Idade precisa ser um intero";
        endif;

    $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
        $erros[]="Email inválido!";
    endif;
    echo $email."<br>";

    $url=filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
    if(!filter_var($url, FILTER_VALIDATE_URL)):
        $erros[]="URL inválido!";
    endif;
    echo $url."<br>";


    /* Validações
    if(!$idade=filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
        $erros[]="Idade precisa ser um inteiro";
    endif;

    if(!$email=filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
        $erros[]="Email inválido";
    endif;

    if(!$peso=filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
        $erros[]="Peso precisa ser um float";
    endif;

    if(!$ip=filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
        $erros[]="IP Inválido";
    endif;

    if(!$url=filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
        $erros[]="URL Inválido";
    endif;
    */

    // Exibindo dados
    if(!empty($erros)):
         foreach($erros as $erro):
            echo "<li> $erro </li>";
        endforeach;
    else:
        echo "Parabéns, seus dados estão corretos!";
    endif;
endif;
?>

<p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Nome: <input type="text" name="nome"><br>
        Idade: <input type="text" name="idade"><br>
        Email: <input type="text" name="email"><br>
        URL: <input type="text" name="url"><br>
        <button name="enviar-formulario" type="submit"> Enviar </button>

    </form>
</p>

<p> 
    <?php
        var_dump($_POST);
    ?>
</p>
    
</body>
</html>