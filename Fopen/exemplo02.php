<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
$usuarios[0] = array(
    "idusuario" => "1",
    "deslogin" => "root",
    "dessenha" => "12345",
    "dtCadastro" => date("Y/m/d H:i:s")
);
$headers = array();

foreach ($usuarios[0] as $key => $value) {
    array_push($headers,ucfirst($key));
}

$file = fopen("usuavios.csv","w+");
fwrite($file, implode(",",$headers) . "\r\n");
foreach($usuarios as $row){
    $data = array();
    foreach($row as $key => $value){
        array_push($data, $value);
    }
    fwrite($file,implode(",",$data)."\r\n");
}
fclose($file);
echo "FOI";