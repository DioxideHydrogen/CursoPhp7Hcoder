<?php

class Sql extends PDO {
    private $conn;

    public function __construct(){
        $this->con = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","sa","19862010");

    }

    private function setParams($stmt,$params = array()){
        foreach($params as $key => $value){
            $stmt->bindParam($key,$value);
        }
    }

    private function setParam($stmt, $key, $value){
        $stmt->bindParam($key,$value);
    }

    public function query($rawQuery, $params = array()){
        $stmt = $this->con->prepare($rawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt;
    }

    public function select($rawQuery, $params = array()):array{
        $stmt = $this->query($rawQuery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}