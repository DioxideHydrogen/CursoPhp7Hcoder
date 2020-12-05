<?php

$pessoas = array();

array_push($pessoas,
    array(
        'nome' => "Hugo Henrique",
        'idade' => 17
    ),
    array(
        'nome' => "Pedro Henrique",
        'idade' => 18
    )
);
echo "<pre>";
print_r($pessoas);
echo "</pre>";

foreach($pessoas as $pessoa){
    foreach($pessoa as $item => $value){
        echo $pessoa[$item];
    }
    echo "<br>";
}