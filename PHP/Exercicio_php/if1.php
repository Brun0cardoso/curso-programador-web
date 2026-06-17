<?php
/* Faça um programa que aplique 10% de desconto caso o valor da compra seja maior que R$100.*/

$valor_total = readline("Digite o valor da compra: ");


if ($valor_total > 100) {
    $cal = $valor_total * 0.10;
    echo "Você recebeu um desconto de 10% " . $valor_total - $cal . " Reais";
}else{
    echo "Desconto não aplicado, valor total deu $valor_total";
}

 /*
 
 $valor_compra = readline ( "INSIRA O VALOR DA SUA COMPRA: ");
 $desconto = (float) 0.1;

 if (valor_compra > 100){
    $valor_final = $valor_compra - ($valor_compra * $desconto);
    echo "O valor da sua compra com  com desconto é de: R$ . $valor_final . ".\n";

 }else{
    echo "O valor da sua compra não é maior que R$ 100,00 . ".\n";
    }

*/
?>