<?php
// Conexão com o banco de dados
try {   
    $pdo = new PDO("mysql:dbname=bd_coments;host=localhost","root","");
} catch (PDOException $e) {
    echo "Erro com o banco de dados: ".$e->getMessage();

} catch (Exception $e) {
    echo "Erro ao conectar, favor contactar o Suporte!";
}