<?php
$nomes = array("Primo"=>"Gustavo","Amigo"=>"Leandro","Vizinho"=>"Carlos","Irmão"=>"Roberto");

// is_array
var_dump(is_array($nomes));
echo "<br>";

if(is_array($nomes)):
    echo "É um array!";
    echo "<br>";
else:
    echo "Não um array!";
    echo "<br>";
endif;

// in_array
echo "<hr>";
echo in_array("Gustavo", $nomes);
echo "<br>";
echo in_array("Felipe", $nomes);

if(in_array("Felipe", $nomes)):
    echo "Existe no array!";
else:
    echo "Não existe array!";
endif;

// array_keys
echo "<br> <hr>";
$keys = array_keys($nomes);
print_r($keys);

// array_values
echo "<br> <hr>";
$values = array_values($nomes);
print_r($values);

$carros = array("Camaro", "Uno", "Gol");
$motos = array("Pop100", "50cc", "cb");

// array_merge
echo "<br> <hr>";
$veiculos = array_merge($carros, $motos);
print_r($veiculos);

// array_unshift
echo "<br> <hr>";
$frutas = array("Uva", "Laranja", "Maçã");
print_r($frutas);
array_unshift($frutas, "Manga", "Acerola", "Morango");
echo "<br>";

// array_push
echo "<br> <hr>";
array_push($frutas, "Maracujá");
print_r($frutas);

// array_combine
echo "<br> <hr>";
$keys = array("Campeão", "Vice", "Terceiro");
$values = array("Vasco","Flamengo","Botafogo");

$times = array_combine($keys, $values);
print_r($times);

// array_sum
echo "<br> <hr>";
$soma = array(5,6,7,8,9,10,11,12,13,14);
$total = array_sum($soma);
echo $total;

// explode
echo "<br> <hr>";
$data = "30/02/2022";

$novaData = explode('/', $data);

$frase = "Meu nome não é Johnny";
$array = explode(" ", $frase);
print_r($array);

// implode
echo "<br> <hr>";

$outrosNomes = array("Rodrigo", "Carlos", "Neusa", "Talita");

$string = implode(",", $outrosNomes);
print_r($string);
