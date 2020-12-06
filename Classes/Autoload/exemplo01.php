<?php

// Depreciada na 7.2
// function __autoload($nomeClasse){
//     require_once($nomeClasse.".php");
// }

function myAutoload($className){
    include(__DIR__ . "/" . $className . ".php");
}
spl_autoload_register("myAutoload");

$carro = new DelRey();
$carro->acelerar(80);