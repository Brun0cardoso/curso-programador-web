<?php

$i = 1; //ponto de partida
$soma = 0;

while ($i <= 100) {// Criterio de parada 
    $soma = $soma + $i;
    $i = $i +1; //incremento

}
echo "Somatório de 1 a 100 é: $soma";

?>