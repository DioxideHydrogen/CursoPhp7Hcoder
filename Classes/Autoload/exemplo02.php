<?php

function incluirClasses($nomeClasse){
    if(file_exists($nomeClasse.'.php') === true){
        require_once($nomeClasse.'.php');
    }
}

spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse){ // Função Anônima
    if(file_exists("Abstratas/".$nomeClasse.'.php') === true){
        require_once("Abstratas/".$nomeClasse.'.php');
    }
});
$carro = new DelRey();
$carro->acelerar(80);
