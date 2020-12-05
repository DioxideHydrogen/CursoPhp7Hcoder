<?php

function soma(/* Converte os valores se possível para Inteiros*/int ...$valores) : String /* Converte o resultado para string */{
    /**
     * array_sum -> Soma todos os valores de um array
     */
    return array_sum($valores);
}

echo soma(2,2);
echo "<br>";
echo soma(1.5, 3.5); #-> 1 + 3 -> 4
echo "<br>";