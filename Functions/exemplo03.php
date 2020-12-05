<?php

function ola($texto = "Mundo", $periodo){
    return "Olá $texto! $periodo! <br>";
}

echo ola("Mundo", "Bom dia!");
echo ola("Gláucio", "Boa Tarde!");
echo ola("João", "Boa Noite!");
echo ola();