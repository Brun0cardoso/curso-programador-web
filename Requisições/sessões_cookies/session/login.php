<?php

session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


if ($usuario == "Bruno" &&  $senha == "1234" ) {

    $_SESSION['usuario'] = $usuario;

    header("Location: painel.php");
    exit();

} else {
    echo "usuário ou senha inválidos";
}

?>