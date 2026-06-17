<?php

//Soma de número
// Solicite número ao  usuário e some-os. o programa  deve parar quando o usuario 


$soma = 0;

do {
    echo "Digite um número para somar ou '0 para sair:' ";
    $numero = trim(fgets(STDIN));

    $soma += $numero;
}while ($numero != 0);

echo "A soma dos valores digitados é: " . $soma . ".\n";

?>