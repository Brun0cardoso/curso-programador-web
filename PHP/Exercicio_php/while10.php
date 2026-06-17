<?php

$contador =1;
$contador_positivos = 0;

while ($contador <= 5) {
    echo "Digite o {$contador}º número: ";   
    $numero = trim(fgets(STDIN));



    if ($numero > 0) {
        $contador_positivos++;
    }
    
    $contador++;
}
 echo " Quantidade de número positivos: " . $contador_positivos . ".\n";

// trim -> retira todos os espaços em branco  e quebras de linhas que o usuário possa vir a digitar. 
// fgets -> lê a entrada de dados do usuário e salva na variável informada.
//STDIN -> informa a entrada padão do programa (teclado).

?>