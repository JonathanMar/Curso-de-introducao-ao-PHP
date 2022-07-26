<?php
  session_start(); //Iniciar a sessao
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">

    <title>Curso de introdução ao PHP</title>
</head>
<body>

   <!-- Menu -->
   <?php
        include("..\menu.php");
   ?>
                
    <form action="..\..\bd\comentar.php" method="post">
        <div class="coments-container">

            <div class="coments-title">  Deixe aqui o seu comentário! </div>

            <label for="coments-name"> </label>
            <input type="text" id="coments-name" class="coments-name" name="coments-name" id="coments-name" placeholder="Nome" minlength="5" maxlength="10" required>

            <label for="coments-coment"> </label>
            <textarea id="coments-coment" name="coments-coment" cols="10" rows="10" placeholder="Deixe aqui o seu comentário!" minlength="5" maxlength="250" required></textarea>

            <div class="coments-alert"> 
            <?php
              if (isset($_SESSION['msg'])) {
                  echo $_SESSION['msg'];
                  unset($_SESSION['msg']);
              }
            ?>
            </div>

            <button class="coments-btn" type="submit" name="btn"> Publicar </button>
        
            </form>

            <section class="coments-table">
              <?php
                include("../../bd/mostrarcomentarios.php");
              ?>
            </section>
            
          </div>
</body>
</html>