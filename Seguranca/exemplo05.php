<?php

$data = [
    "nome"=>"Hcode"
];

define( "SECRET_IV", pack("a16", 'senha') );
define ( "SECRET", pack("a16", "senha"));

$openssl = openssl_encrypt(
    json_encode($data),
    'AES-128-CBC',
    SECRET,
    0,
    SECRET_IV
);

echo base64_encode($openssl);

$string = openssl_decrypt(
    $openssl,
    'AES-128-CBC',
    SECRET,
    0,
    SECRET_IV
);

var_dump(json_decode($string, true));

// DEPRECATED 7.1>

// $mcrypt = mcrypt_encrypt(
//     MCRYPT_RIJNDAEL_128,
//     SECRET,
//     json_encode($data),
//     MCRYPT_MODE_ECB
// );

// $final = base64_encode($mcrypt);

// $string = mcrypt_decrypt(
//     MCRYPT_RIJNDAEL_128,
//     SECRET,
//     base64_decode($final),
//     MCRYPT_MODE_ECB
// );

// var_dump(json_decode($string));

