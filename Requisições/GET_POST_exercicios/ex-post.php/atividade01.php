<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$curso = $_POST['curso'];


echo "Bem vindo, $nome" . "<br>";
echo "seu email é $email" . "<br>";
echo "sua idade é $idade" . "<br>";


if ($curso == "web") {
    echo "Você se increveu no curso Programador web da instituição SENAC PR";
} else if ($curso == "sistemas") {
    echo "Você se increveu no curso Programador de Sistemas da instituição SENAC PR";
} else {
    "voce se increveu no curso Instagram para Negócios da instituição SENAC PR";
}



?>