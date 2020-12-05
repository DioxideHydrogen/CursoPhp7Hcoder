<?php
error_reporting(1);

$nome = "Glaucio";

//Escopo
function teste(){
    global $nome; //Seta a variável nome como global
    echo $nome."<br>";
}

//Escopo
function teste2(){
    echo $nome." agora no teste2";
}

teste();
teste2();