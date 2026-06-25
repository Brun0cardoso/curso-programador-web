<?php

session_start();

header("Cache-control: no-cache, no store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

if (!isset ($_SESSION['nome'])) {
    header("location: index.php");
    exit();
}

?>