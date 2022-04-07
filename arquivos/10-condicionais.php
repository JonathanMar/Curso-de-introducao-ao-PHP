<?php
/*
* Condicionais 
* if
* Else
* elseif

* Switch
*/


//  Condicionais 
$numero = 50;

if ($numero == 10):
    echo "É igual a 10";
elseif ($numero <= 9):
    echo "É menor ou igual a 9";
else:
    echo "É diferente 10";
endif;

echo "<hr>";

$media = 7;

echo ($media >=7) ? "Aprovado!" : "Reprovado!";
echo "<hr>";
// Switch
$cor = "vermelho";

switch ($cor):
    case "vermelho":
        echo "Sua cor preferida é o vermelho"; 
        break;

        case "verde";
        echo "Verde";
        break;

        case "azul";
        echo "Sua cor preferida é o azul";
        break;

endswitch;
