<?php

$numero = readline("Digite seu número: ");

if ($numero >0) {
    echo "Número positivo" . "\n";
}else if ($numero == 0) {
    echo "Número neutro" . "\n";
}else {
    echo "Número negativo" . "\n";
}

?>