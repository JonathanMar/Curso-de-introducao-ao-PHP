<?php

// include("..\aulas\menu.php");

// While & Do While

$contador = 1;
while ($contador <= 10) :
    echo "Contador é $contador <br>";
    $contador++;
endwhile;

echo "<hr>";

$contador = 1;

do {
    echo "Contador é $contador <br>";
    $contador++;
} while ($contador <= 10);