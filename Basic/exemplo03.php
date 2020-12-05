<?php
#Variáveis Simples
$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1990;
$salario = 5500.99;

$bloqueado = false;

////////////////////////////////////////
//         Variáveis Compostas
////////////////////////////////////////
datefmt_set_timezone("America/Sergipe");


$frutas = array("abacaxi","laranja","manga");

// echo $frutas[2];

$nascimento = new DateTime();

// var_dump($nascimento);

/////////// Variáveis Especiais
$arquivo = fopen("exemplo03.php","r");
// var_dump($arquivo);
fclose($arquivo);

$nulo = null;
$vazio = ""; 