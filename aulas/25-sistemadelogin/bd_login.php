<?php

session_start();

require_once ("bd_login.php");

$usu_login = $_POST['usu_login'];
$usu_senha = $_POST['usu_senha'];

if (empty($usu_login) || empty($usu_senha)) {
    header('Location: index.php');
    $_SESSION['msg'] = "<p> Erro ao cadastrar comentário!</p>";
} else {
    header('Location: painel.php');
    
}