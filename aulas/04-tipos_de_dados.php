<?php

include("..\aulas\menu.php");

    /************* Escalares *************/
// Strings 

$nome = "Olá Mundo, teste, 123";
var_dump($nome);

if(is_string($nome)){
    echo "<br>É uma string";
} else{
    echo "<br>Não é uma string";
}

echo "<hr>";

// int
$idade = 27;
var_dump($idade);

if(is_int($idade)){
    echo "<br>É um inteiro";
} else {
    echo "<br>Não um inteiro";
}

echo "<hr>";

// float
$altura = 1.77;
var_dump($altura);

if(is_float($altura)){
    echo "<br>É um float";
} else {
    echo "<br>Não um float";
}

echo "<hr>";

// boolean
$admin = true;
var_dump($admin);

if(is_bool($admin)){
    echo "<br>É um boleano";
} else {
    echo "<br>Não um boleano";
}

echo "<hr>";

    /************* Compostos *************/

// array
$carros = array("Gol","Uno", "Camaro", 12, 20.6, true);
var_dump($carros);

if(is_array($carros)){
    echo "<br>É um array";
} else {
    echo "<br>Não um array";
}

echo "<hr>";

// Object
class Cliente{
    public $nome;
    public function atributNome($nome){
        $this->nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atributNome("Rodrigo");
var_dump($cliente);

if(is_object($cliente)){
    echo "<br>É um objeto";
} else {
    echo "<br>Não um objeto";
}

echo "<hr>";

    /************* Especiais *************/
// Null
$cidade = Null;
var_dump($cidade);

// Resource