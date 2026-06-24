<?php

$host = "localhost";
$usuario = "root";
$senha = "1234"; //aqui você vai colocar a sua senha do banco de dados
$banco = "escola";

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if(!$conexao) {
    die("erro na conexão com o banco!");
}

?>