<?php

include("conexao.php");

$nome = $_POST['nome'];
$idade = $_POST['idade'];


$sql = "INSERT INTO alunos(nome, idade) VALUES('$nome', '$idade')";


mysqli_query($conexao, $sql);


echo "Aluno cadastrado!";
echo "<br><br>";
echo "<a href= 'index.php'>Voltar</a>";
