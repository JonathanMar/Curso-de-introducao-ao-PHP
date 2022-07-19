<?php
include ('conexao.php');
$usuario = $_POST['coments-name'];
$coment = $_POST['coments-coment'];
// $data = date("Y-m-d H:i:s");

// $insert = ("INSERT INTO post_coments(usuario,coment,data) 
// VALUES('$usuario','$coment','$data')");
$insert = ("INSERT INTO post_coments(usuario,coment) VALUES('$usuario','$coment')");

$sql = "SELECT * FROM post_coments ORDER BY id desc";


// INSERT INTO post_coments (usuario, coment) VALUES ('João','tedede');


// date_default_timezone_set('America/Sao_paulo');
// $data = date("Y-m-d H:i:s");

//     if ($usuario != '' && $coment != ''){
//         $insert = ("INSERT INTO post_coments(usuario,coment,data) VALUES('$usuario','$coment','$data')");
//     } else{
//         echo "Error: Preencha todos os campos antes de enviar!";
//     }
