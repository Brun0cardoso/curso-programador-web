<?php

$vetor = array("nome" => "Bruno", "idade" => "34", "peso" => "75", "rede social" => "facebook", "comida preferida" => "churrasco");

foreach ($vetor as $key => $value){
    echo "o campo $key possui o conteúdo $value" . PHP_EOL;
}

?>