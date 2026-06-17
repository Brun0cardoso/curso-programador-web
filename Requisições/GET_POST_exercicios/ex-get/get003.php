<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operacao =$_GET['operacao'];

if($operacao == "+" ) {
    $resultado = $num1 + $num2;
}else if ($operacao == "-") {
    $resultado = $num1 - $num2;
} else if ($operacao == "*") {
    $resultado = $num1 * $num2;
} else {
    $resultado = $num1 / $num2;
}

echo "O resultado de $num1 $operacao $num2= $resultado";


?>