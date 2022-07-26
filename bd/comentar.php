<?php
 session_start(); // Inicia a sessão.
 ob_start();  //Limpar o buffer de saída.

 require_once("conexao.php"); // Conexão com o banco de dados.

    date_default_timezone_set('America/Sao_Paulo'); // Define o horário padrão para datas.

    // Pegando dados inseridos nos campos da tabela.
    $nome = $_POST['coments-name'];
    $comentario = $_POST['coments-coment'];
    $data_cmt = date('d/m/y');
    $hora_cmt = date('h:i');

    // Verificando se os campos não estão vazios.
    if (empty($nome) || empty($comentario) || empty($data_cmt) || empty($hora_cmt)){
        $_SESSION['msg'] = "<p class='coments-alert-error'> Erro ao cadastrar comentário!</p>";
        header("Location: http://localhost/sites/Curso-de-introducao-ao-PHP/aulas/ajax/coments.php");
    } else {

        // Insere os dados no banco.
        $stmt = $pdo -> prepare("INSERT INTO post_coments (usuario,coment,data_cmt,hora_cmt) VALUES (:us, :cm, :dt, :hr)");

        $stmt -> bindValue ('us', $nome, PDO::PARAM_STR);
        $stmt -> bindValue ('cm', $comentario, PDO::PARAM_STR);
        $stmt -> bindValue ('dt', $data_cmt, PDO::PARAM_STR);
        $stmt -> bindValue ('hr', $hora_cmt, PDO::PARAM_STR);
        $stmt -> execute ();

            // Mensagem de retorno sobre o cadastro.
            if ($stmt->rowCount() == 0) {   
                header("Location: http://localhost/sites/Curso-de-introducao-ao-PHP/aulas/ajax/coments.php");

                $_SESSION['msg'] = "<p class='coments-alert-error'> Erro ao cadastrar comentário!</p>";
                echo "<script>alert('Erro ao cadastrar comentário!');</script>";
            }else {
                $_SESSION['msg'] = "<p class='coments-alert-success'>Comentário cadastrado com sucesso!</p>";
                header("Location: http://localhost/sites/Curso-de-introducao-ao-PHP/aulas/ajax/coments.php");
            }

    }