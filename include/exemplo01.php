<?php

function somar($a,$b){
    if(is_int($a) && is_int($b)){
        return $a + $b;
    }
    return false;
}