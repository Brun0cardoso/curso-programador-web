<?php

$n1 = readline("Digite seu primeiro número: ");
$n2 = readline("Digite seu segundo número: ");

if ($n1 > $n2 ) {
    echo "o número " . $n1 . " é maior que o número " . $n2 . ".\n"; 
} else if ($n1 < $n2 ) {
    echo "o número " . $n2 . " é maior que o número " . $n1 . ".\n"; 
}else {
    echo "Os números " . $n1 . " e " . $n2 . " são iguais" . ".\n";
}

?>