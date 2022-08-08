<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Upload de arquivos multiplos </title>
</head>
<body>

<?php

    if(isset($_POST['enviar-formulario'])):
        $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
        $quantidadeArquivos = count($_FILES['arquivos']['name']);
        $contador = 0;

        while ($contador < $quantidadeArquivos){

        $extensao = pathinfo($_FILES['arquivos'][$contador], PATHINFO_EXTENSION);

        if(in_array($extensao, $formatosPermitidos)):
            $pasta = "arquivos/";
            $temporario = $_FILES['arquivo']['tmp_name'][$contador];
            $novoNome = uniqid().".$extensao";

            if(move_uploaded_file($temporario, $pasta.$novoNome)):
            echo "Upload feito com sucesso para a $pasta.$novoNome <br>";
            else:
                echo "Erro ao enviar o arquivo $temporario <br>";
            endif;
            else:
                echo "$extensao não é permitida! <br>";
        endif;

            $contador++;
        }
    endif;
    
?>
    
    <h3> Formatos Permitidos: png, jpg, gif. </h3>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data"> 

        <input type="file" name="arquivo[]" multiple><br>
        <input type="submit" name="enviar-formulario">

    </form>

</body>
</html>