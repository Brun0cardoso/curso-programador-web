<?php


$usuario = $_POST['usuario'];

setcookie("usuario", $usuario, time() + 3600);

header("Location: bemvindo.php ");
exit()


?>