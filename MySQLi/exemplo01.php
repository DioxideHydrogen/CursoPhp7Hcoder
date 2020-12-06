<?php

$conn = new mysqli("localhost","alexa","19862010","dbphp7");
if($conn->connect_error){
    echo "Error: " . $conn->connect_error;
}
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha)
 VALUES(?,?)");
$login = "user";
$pass = "12345";
$stmt->bind_param("ss",$login,$pass);
$login = "root";
$pass = "!@#$";
$stmt->execute();