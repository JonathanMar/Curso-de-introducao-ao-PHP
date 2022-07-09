<?php

include("..\aulas\menu.php");


for ($contador = 0; $contador <= 10; $contador++):
    echo "5 X $contador = ".($contador*5)."<br>";
endfor;

echo "<hr>";

$cores = array("Verde", "Vermelho", "Azul");;

foreach($cores as $valor):
    echo $valor."<br>";
endforeach;

