<?php

$bd_name = "bd_login";
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:dbname=$bd_name;host=$servername",$username,$password);
} catch (PDOException $e) {
    echo $e->getMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}
    