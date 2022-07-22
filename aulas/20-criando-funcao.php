<?php

// include("..\aulas\menu.php");


// Função para números
// number_format
// round
// ceil
// floor
// rand

$db = 1234.56;
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é R$ $preco"."<hr>";

echo round(30.20)."<hr>";
echo ceil(8.20)."<hr>";
echo floor(4.20)."<hr>";
echo rand(1,20)."<hr>";

function exibeNome($nome) {
    echo "Meu nome é $nome";
}

exibeNome("Luiz Rodrigo");

echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4){
    $media = ($n1 + $n2 + $n3 + $n4) /4;
    if ($media >= 6){
        echo "$nome foi aprovado! <br>";
    } else {
        echo "$nome foi reprovado! <br>";
    }
}

calcularMedia("Alisson", 5, 10, 0, 0);
calcularMedia("Carlos", 10, 10, 10, 0);