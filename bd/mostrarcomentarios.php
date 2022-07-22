<?php
require_once('conexao.php');

    $mscmt = $pdo -> prepare("SELECT * FROM post_coments WHERE 1=1");

    $mscmt = quer