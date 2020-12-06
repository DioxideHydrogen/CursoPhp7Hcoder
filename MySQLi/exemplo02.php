<?php

$conn = new mysqli("localhost","alexa","19862010","dbphp7");
if($conn->connect_error){
    echo "Error: " . $conn->connect_error;
}
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");
//->fetch_assoc()
$data = array();
while($row = $result->fetch_array(MYSQLI_ASSOC)){
    array_push($data,$row);
}

echo json_encode($data);