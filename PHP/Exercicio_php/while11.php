<?php

//Média de notas 
// Receba 5 notas e calcule a média final.

$contador = 1;
$soma =0;

while ($contador <= 5) {

echo "Digite a {$contador}ª nota: ";
$nota = trim(fgets(STDIN));

$soma += $nota;
$contador++;

}

$media = $soma / 5;

echo "Média final: " . $media . ".\n";





?>