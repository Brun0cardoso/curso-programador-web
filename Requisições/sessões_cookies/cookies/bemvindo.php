<?php
 
if (!isset($_COOKIE['nome'])) {
    echo "<h1>Bem-Vindo, novamente, " . $_COOKIE['usuario'] . "!</h1>";
} else {
    echo "<h1>Nenhum cookie encontrado!</h1>";
}