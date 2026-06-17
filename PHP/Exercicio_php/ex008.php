<?php

/*correççao: errado!

$temperatura = readline("Digite a temperatura: ");

$cal = ($temperatura - 32) / 1.8;

echo "a temperatura é: $cal" . "ºf/n"; */ 



/*correção*/


$celsius = readline ("informe aqui a temperatura em graus ºc: ");

$fahrenheit = ($celsius * 1.8 ) + 32;

echo "A temperatura" . $celsius . "ºC convertida é: " . $fahrenheit . "ºF\n";



?>
