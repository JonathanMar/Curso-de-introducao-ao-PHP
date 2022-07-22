<?php

// include("..\aulas\menu.php");

// Operadores lógicos 
// Nos permitem fazer comparações entre expressões 
// e (&& - and)
// ou (|| - or)
// ou exclusivo (xor)
// negação (!)

$idade = 25;
$nome = "Jonathan";

if (($idade == 25) and ($nome == "Jonathan")):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;

