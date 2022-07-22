<?php
require_once("conexao.php");

    $nome = $_POST['coments-name'];
    $comentario = $_POST['coments-coment'];

    $stmt = $pdo -> prepare("INSERT INTO post_coments (usuario,coment) VALUES (:us, :cm)");

    $stmt -> bindValue ('us', $nome);
    $stmt -> bindValue ('cm', $comentario);
    $stmt -> execute ();

    if ($stmt->rowCount() == 0) {   
        echo "<script>alert('Erro ao cadastrar comentario!');</script>";
    }else {
        echo "<script>alert('Comentário salvo com sucesso!');</script>";
    }