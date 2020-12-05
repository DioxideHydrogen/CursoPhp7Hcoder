<?php

$a = 10;

function trocaValorSemEComercial($a){
    $a += 50;
    return $a;
}

function trocaValorComEComercial(&$a){
    $a += 50;
    return $a;
}

/**
 * Parragem de parâmetro por referência
 * 
 * & referencia o endereço de memória da variável
 * Consequentemente alterações feita nela
 * Alteram a variável globalmente
 */
echo "Valor inicial: " . $a; // 10
echo "<br><hr>";
echo "Chamada da função Sem &:" . trocaValorSemEComercial($a); // 60
echo "<br>";
echo "Valor inicial após função Sem &: " . $a; // 10
echo "<br><hr>";
echo "Chamada da função Com &: "  . trocaValorComEComercial($a); // 60
echo "<br>";
echo "Valor inicial após função com &: " . $a; // 60