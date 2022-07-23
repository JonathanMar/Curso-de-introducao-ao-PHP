<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">

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
            <input type="text" id="coments-name" class="coments-name" name="coments-name" id="coments-name" placeholder="Nome">

            <label for="coments-coment"> </label>
            <textarea id="coments-coment" name="coments-coment" cols="10" rows="10" placeholder="Deixe aqui o seu comentário!"></textarea>

            <div class="coments-alert"> </div>

            <button class="coments-btn" type="submit" name="btn"> Publicar </button>
        
            </form>

            <section class="coments-table">
                <div class="coments-box">
                  <div class="coments-box-username"> Nome de usuário </div>
                  <div class="coments-box-coment"> Comentário </div>
                </div>

                <div class="coments-box">
                  <div class="coments-box-username"> Nome de usuário </div>
                  <div class="coments-box-coment"> Comentário </div>
                </div>

                <div class="coments-box">
                  <div class="coments-box-username"> Nome de usuário </div>
                  <div class="coments-box-coment"> Comentário </div>
                </div>
            </section>
            
          </div>
</body>
</html>