<?php

$a = readline("digite a primeira nota: ");
$b = readline("digite a segunda nota ");

$media = (($a * 3.5) + ($b * 7.5)) / 11;

echo "MEDIA = " . number_format($media, 5, ".", "");

?>
