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
// echo "<pre>";
$json = json_encode($pessoas);
// echo "</pre>";

echo "<pre>";
echo json_decode($json,true);
echo "</pre>";