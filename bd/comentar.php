<?php
require_once("conexao.php");

    date_default_timezone_set('America/Sao_Paulo');

    $nome = $_POST['coments-name'];
    $comentario = $_POST['coments-coment'];
    $data = date('d/m/y h:i:s');

    if (empty($nome) || empty($comentario) || empty($data)){
        echo "<div class='coments-alert'> Teste mensagem de alerta</div>";
    } else {

        $stmt = $pdo -> prepare("INSERT INTO post_coments (usuario,coment,data) VALUES (:us, :cm, :dt)");

        $stmt -> bindValue ('us', $nome);
        $stmt -> bindValue ('cm', $comentario);
        $stmt -> bindValue ('dt', $data);
        $stmt -> execute ();
        
            if ($stmt->rowCount() == 0) {   
                echo "<script>alert('Erro ao cadastrar comentario!');</>";
            }else {
                echo "<script>alert('Comentário salvo com sucesso!');</script>";
                $nome = " "; $comentario = " "; $data = " ";
            }

    }