<?php

function ola(){

    $argumentos = func_get_args();

    return $argumentos;
}

$a = ola("Hugo","Bom dia","Como está?");
echo "<pre>";
var_dump($a);
echo "</pre>";