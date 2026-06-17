<?php

//Sistema de senha 
// Crie um programa que solicite uma senha ao usuário até que ele digite a senha correta. 

$senha_correta = "1234";
$senha = "";

while ($senha != $senha_correta) {

    echo "Digite a sua senha: ";
    $senha = trim(fgets(STDIN));

    if ($senha != $senha_correta) {
        echo "Senha incorreta! Tente novamente" . ".\n";
        
    }
}

echo "senha correta! seja bem-vindo ao sistema Senac." . ".\n";CLSCTX_ALL

?>