<?php
$conexao = mysqli_connect(
    "localhost",
    "root",
    "1234",
    "biblioteca"
);
if (!$conexao) {
    die("erro na conexão: " . mysqli_connect_error());
}
?>