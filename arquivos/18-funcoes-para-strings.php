<?php
// Funções para Strings 
// strtoupper
// strtolower
// substr
// str_pad
// str_repeat
// strlen
// str_replace
// strpos

$nome = "Roberto Rarlos";
$novoNome = strtoupper($nome);
echo $novoNome."<hr>";

$novoNovoNome = strtolower($novoNome);
echo $novoNovoNome."<hr>";

$mensagem = "Olá mundo";
echo substr($mensagem, 4, 6)."<hr>";

$objeto = "Mouse";
$novoObjeto = str_pad($objeto, 10, "*", );
echo $novoObjeto."<hr>";

$string = str_repeat("Sucesso!", 5);
echo $string."<hr>";

$mensagem = "Olá mundo";
echo strlen($mensagem);
echo "<hr>";

$texto = "A seleção Argentina será campeã da copa do mundo de 2018.";
$novoTexto = str_replace("Argentina", "Brasileira", $texto);

echo $novoTexto."<hr>";

echo strpos($texto, "copa"); 