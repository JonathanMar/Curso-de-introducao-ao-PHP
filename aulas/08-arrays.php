<?php

// include("..\aulas\menu.php");

// Array numéricos
$carros = array(1=>"Tesla Model S", 2=>"Tesla Model X", 3=>"Tesla Model S Plaid");
$carros[4] = "Tesla Model 3";
$carros[5] = "Tesla Model Y";
print_r($carros);
echo "<br> <hr>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
print_r($motos);
echo "<br> <hr>";

// Count
$clientes = ["Daniel", "Jésica", "Bia"];
print_r($clientes);
echo "<br> <hr>";

// Foreach
foreach ($clientes as $valor) {
    echo $valor."<br>";
}

// Arrays associativos
$pessoas = array("nome"=> "Rodrigo", "Idade"=> "23", "altura"=> "1.75");
echo $pessoas["nome"];

foreach ($pessoas as $indice => $valor) {
    echo $indice.":".$valor."<br>";
}
echo "<br> <hr>";

// Arrays multidimensionais
$times = array(
    "Cariocas"=> array(
        "Campeão"=>"Vasco", 
        "Vice"=>"Flamengo", 
        "Terceiro"=>"Botafogo"),

    "Paulistas"=> array(
        "Campeão"=>"Santos", 
        "Vice"=>"São Paulo", 
        "Terceiro"=>"Palmeiras"),

    "Baianos"=> array(
        "Campeão"=>"Bahia", 
        "Vice"=>"Vitoria", 
        "Terceiro"=>"Itabuna"),
);

// echo $times["Paulistas"][1];
echo "<h2>- Resultado Campeões -</h2>";

foreach($times["Cariocas"] as $indice => $valor) {
    echo $indice.": ".$valor."<br>";
}
echo "<br>";


foreach($times["Paulistas"] as $indice => $valor) {
    echo $indice.": ".$valor."<br>";
}
echo "<br>";


foreach($times["Baianos"] as $indice => $valor) {
    echo $indice.": ".$valor."<br>";
}
echo "<br> <hr>";