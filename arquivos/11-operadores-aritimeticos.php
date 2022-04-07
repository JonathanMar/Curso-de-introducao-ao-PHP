<?php
/*
* Operadores aritimeticos
*
* São usados com valores numéricos para executar operações aritméticas comuns, como adição, subtração, multiplicação etc...
*
* Adição +
* Subtração -
* Multiplicação *
* Divisão /
* Módulo %
* Exeponencição 
*/

$a = 10;
$b = 20;
$c = 30;
$d = 5;
$e = 16;

$adição = $a + $b;
echo $adição;
echo "<hr>";

$subtração = $c - $a;
echo $subtração;
echo "<hr>";

$multiplicação = $d - $a;
echo $multiplicação;
echo "<hr>";

$divisao = $c / $a;
echo $divisao;
echo "<hr>";

$modulo = $e % $d;
echo $modulo;
echo "<hr>";

$expo = $a ** $d;
echo $expo;
echo "<hr>";

echo (5 + 7 + 9 + 8) / 4;