<?php

$frase = "A repetição é mãe da retenção.";

$q = strpos($frase, "mãe");

$texto = substr($frase, 0, $q);
$texto2 = substr($frase,$q);

var_dump($texto);
echo "<br>";
var_dump($texto2);
