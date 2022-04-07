<?php
// Operadores de comparação
// ==
// !=
// ===
// !===
// <>
// <
// >
// <=
// >=
// <=>

if(10 == 10):
    echo "Positivo, o número é idêntico";
else:
    echo "Negativo, o número não idêntico";
endif;
echo "<hr>";

if(10 == "10"):
    echo "Positivo, o número é idêntico";
else:
    echo "Negativo, o número não idêntico";
endif;
echo "<hr>";

if(10 !== 11):
    echo "Positivo, o número é diferente";
else:
    echo "Negativo, o número é idêntico";
endif;
echo "<hr>";

if(10 <> 10):
    echo "Positivo, o número é diferente";
else:
    echo "Negativo, o número não é diferente";
endif;
echo "<hr>";

if(10 < 10):
    echo "Positivo, o número é menor";
else:
    echo "Negativo, o número não é menor";
endif;
echo "<hr>";

if(10 > 10):
    echo "Positivo, o número é maior";
else:
    echo "Negativo, o número não menor";
endif;
echo "<hr>";

if(10 <= 10):
    echo "Positivo, o número é menor ou igual";
else:
    echo "Negativo, o número não é menor ou igual";
endif;
echo "<hr>";

if(10 >= 10):
    echo "Positivo, o número é maior ou igual";
else:
    echo "Negativo, o número não é maior ou igual";
endif;
echo "<hr>";

// Comparação combinada
if(10 <=> 10):
    echo "Positivo, o número é maior ou igual";
else:
    echo "Negativo, o número não é maior ou igual";
endif;
echo "<hr>";
