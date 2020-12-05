<?php

$nome = "Joao";
$sobrenome = "Souza";

#Nomes de variáveis auto-descritivas e em camelCase
$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;

#É uma boa prática após o uso de uma variável você remover ela da memória com o unset()
#Caso não remova, o PHP tem uma feature chamada Garbage Collector que remove da memórias...
#... as variáveis não usadas.
unset($nome,$sobrenome,$nomeCompleto);

if(isset($nome,$sobrenome,$nomeCompleto)){
    echo $nomeCompleto;
}