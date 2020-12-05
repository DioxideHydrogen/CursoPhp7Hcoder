<?php
error_reporting(E_ALL);

$nome = (Integer) $_GET["a"];

var_dump($nome);

// Protocolo://domain.uri/query

# Array Super Global
$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;