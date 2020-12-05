<?php

// require "exemplo01.php"; Exige que o arquivo exista e esteja funcionando corretamente, caso não, retorna uma Exception
include "exemplo01.php"; // Tenta funcionar mesmo que o arquivo não exista ou esteja com problemas
// include_once inclui só uma vez
// require_once requesita só uma vez
$soma = somar(1,3);

var_dump($soma);