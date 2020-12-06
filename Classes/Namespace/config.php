<?php

spl_autoload_register(function($nomeClasse) {
    $dirClass = "Class";
    $filename = str_replace("\\","/",$dirClass . "/" . $nomeClasse . ".php");
    
    if(file_exists($filename)){
        require_once($filename);
    }
});