<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Links</title>
</head>
<body>
    <main class="principal">
        <div class="conteudo">
            <?php
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer>
        CÓDIGO DO CURSO COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>