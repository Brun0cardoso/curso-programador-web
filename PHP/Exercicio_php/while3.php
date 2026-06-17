<?php
//tabuada
$n = readline("Digite um número para a tabuada: ");
$x = 1; /*ponto de partida, exemplo 2x1, 2x2, 2x3...*/ 

while($x <= 10) { /* enquanto x for menor ou igual a 10*/
    $mult = $n * $x; /* essa  variavel faz a multiplicação, exemplo 2x1,  2x2.. */
    echo "$n x $x = $mult\n"; /* mostra a multiplicação */
    $x++; /* icrementa mais um na equação*/
}


?>
