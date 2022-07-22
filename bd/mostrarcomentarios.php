<?php
require_once('conexao.php');

    $mscmt = $pdo -> prepare("SELECT * FROM post_coments ORDER BY id DESC");

    // $mscmt = ;