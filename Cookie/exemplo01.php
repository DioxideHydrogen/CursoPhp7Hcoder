<?php
$value = array(
    "nome"=>"Hugolino"
);
setcookie("NOME_DO_COOKIE",json_encode($value), time() + (60*60 /* 1 hour */));

echo "OK";