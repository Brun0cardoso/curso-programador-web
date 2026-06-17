<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if ($senha == 1234 && $usuario == 'admin') {
    echo "Login realizado com sucesso " . "<br>";
    echo "Bem vindo, $usuario";
} else {
    echo "Usuario ou senha incorretos!" . "\n"; 
}

?>