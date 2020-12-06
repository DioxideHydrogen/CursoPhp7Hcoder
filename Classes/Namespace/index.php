<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Hugo Henrique");
$cad->setEmail("email@email.com");
$cad->setSenha("123456");

$cad->registrarVenda();