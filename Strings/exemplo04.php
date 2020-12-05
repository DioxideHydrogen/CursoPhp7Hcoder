<?php

$frase = "A repetição é a mãe da retenção";

$palavra = "mãe";

// Retorna a partir de qual caractere a palavra "mãe" começa
$q = strpos($frase,$palavra);

// Corta uma string desde o 1 caractere até o 16º

$texto = substr($frase,0,17);

// $q+strlen($palavra)+1 => Exclui a palavra procurada + 1 (espaço)
$texto2 = substr($frase, $q+strlen($palavra)+1,strlen($frase));

var_dump($q);
echo "<br>";
var_dump($texto);
echo "<br>";
var_dump($texto2);
echo "<br>";