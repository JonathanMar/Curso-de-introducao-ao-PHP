<?php
require_once("conexao.php");

    date_default_timezone_set('America/Sao_Paulo');

    $nome = $_POST['coments-name'];
    $comentario = $_POST['coments-coment'];
    $data = date('d/m/y h:i:s');


    $stmt = $pdo -> prepare("INSERT INTO post_coments (usuario,coment,data) VALUES (:us, :cm, :dt)");

    $stmt -> bindValue ('us', $nome);
    $stmt -> bindValue ('cm', $comentario);
    $stmt -> bindValue ('dt', $data);
    $stmt -> execute ();
    
    if ($stmt->rowCount() == 0) {   
        echo "<script>alert('Erro ao cadastrar comentario!');</script>";
    }else {
        echo "<script>alert('Comentário salvo com sucesso!');</script>";
    }

    
    $dataAtual = new DateTimeZone('America/Sao_Paulo');

    $tempoComent =  $dataAtual - $data;
