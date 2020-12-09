<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","sa","19862010");
$conn->beginTransaction();
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");
$id = "2";
$stmt->execute(array($id));

// $conn->rollBack();
$conn->commit();
echo "Excluido OK!";