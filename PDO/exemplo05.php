<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","sa","19862010");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");
$id = "1";
$stmt->bindParam(":ID",$id);
$stmt->execute();

echo "Excluido OK!";