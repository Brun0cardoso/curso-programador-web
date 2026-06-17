<?php

/*

Conceito de aluno Receba a nota de um aluno e mostre:
Conceito A, nota maior ou igual a 9
Conceito B, nota maior ou igual a 7
conceito C, nota maior ou igual a 5
conceito D, abaixo de 5

*/

$nota = (float) readline("Digite sua nota: ");

if ($nota >= 0 && $nota <= 10) {

    if ($nota >= 9) {
        echo "A";
    } elseif ($nota >= 7) {
        echo "B";
    } elseif ($nota >= 5) {
        echo "C";
    } else {
        echo "D";
    }

} else {
    echo "Digite uma nota entre 0 e 10.";
}

?>