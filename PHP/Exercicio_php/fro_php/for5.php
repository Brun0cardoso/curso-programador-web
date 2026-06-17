<?php

/*6. Soma de 1 a 100
Calcule a soma de todos os números de 1 até 100.*/

$soma = 0;

for ($i = 1; $i <= 100; $i++) {
    $soma += $i;
}
echo "A soma é: " . $soma;





    /* $i = 1; //ponto de partida
$soma = 0;

while ($i <= 100) {// Criterio de parada 
    $soma = $soma + $i;
    $i = $i +1; //incremento

}
echo "Somatório de 1 a 100 é: $soma"; */
?>