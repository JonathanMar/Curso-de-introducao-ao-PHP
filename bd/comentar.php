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


<input type="password" id="senha" class="input-login upper" maxlength="3" placeholder="Senha" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">

var 
