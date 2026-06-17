<?php

//Média de notas 

$soma =0;
$quantidade = 1;

do{
    echo "Digite a nota (-1 para encerrar): ";
    $nota = trim(fgets(STDIN));

    if ($nota != -1){
        $soma += $nota;
        $quantidade++;
    }

    }while ($nota != -1);

    if ($nota > 0) {
        $media =$nota / $quantidade;
        echo "media das notas: " . $media . ".\n";
    }else {
        echo "Nenhuma nota válida foi informada" . ".\n";
    }
    

?>