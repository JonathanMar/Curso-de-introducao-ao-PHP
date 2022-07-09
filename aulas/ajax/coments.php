<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste com Ajax</title>
</head>
<body>
    <form action="#" method="post">
        <div class="coments-container">
            <div class="coments-title">  Deixe aqui o seu comentário </div>

            <label for="coments-name">
                <span> Nome: </span>
            </label>
            <input type="text" class="coments-name" placeholder="" name="coments-name">

            <label for="coments-coment"> </label>
            <textarea name="coments-coment" cols="30" rows="10" placeholder="Deixe aqui o seu comentário!"></textarea>

            <button> Publicar </button>
            <!-- <h2> Comentário publicado com sucesso! </h2> -->
            <!-- <h2> Erro! Preencha todos os campos! -->
        </div>
            </form>

            <div class="coments-table">
                <div class="coments-title"> Comentários </div>

                <div class="coments-coments"> 

                </div>

            </div>
</body>
</html>