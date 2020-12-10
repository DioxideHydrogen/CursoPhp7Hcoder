<?php
$cep = "01310100";
$url = "viacep.com.br/ws/$cep/json/";
$ch = curl_init($url);
curl_setopt_array($ch, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false
));
$response = curl_exec($ch);

$data = json_decode($response, true);

print_r($data["logradouro"]);
curl_close($ch);