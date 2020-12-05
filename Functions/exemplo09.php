<?php

// Funções Anônimas

function test($callback){
    // Processo lento
    sleep(3);
    $callback();
}

test(function(){
    echo "Terminou!";
});