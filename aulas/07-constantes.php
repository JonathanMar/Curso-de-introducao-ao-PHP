<?php

// include("..\aulas\menu.php");

// Constantes 
define("Nome", "José Algusto");
define("Idade", 18);
define("Altura", 1.60);
define("Casado", true);

define("Times", ['Vasco', 'São Paulo', 'Santos']);

echo 'Meu nome é '.Nome.' e minha idade é '.Idade.' e minha altura é '.Altura.'.';
echo "<hr>";

echo var_dump(Times);

function exibeNome() {
    echo Nome;
}

echo "<br>";
exibeNome();