<?php

$conn = new PDO("sqlsrv:dbname=dbphp7;host=192.168.1.6","notebook","19862010");
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($results as $row) {
    foreach($row as $key => $value){
        echo "<strong>".$key.":</strong> " . $value . "<br>";
    }
    echo "=============================================<br>";
}

var_dump($results);
