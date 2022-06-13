<?php

$nome = $_POST['nome'];
$email = $_POST['email'];

echo "Seu nome é $nome, e seu email é $email. <br>";

var_dump($_POST);

$getNome = $_GET['getNome'];
$getEmail = $_GET['getEmail'];

echo "Seu nome é $getNome, e seu email $getEmail. <br>";

echo $_GET['idade']."<br>".$_GET['sobrenome'];

var_dump($_GET);
