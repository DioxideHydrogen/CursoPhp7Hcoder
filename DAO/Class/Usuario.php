<?php

class Usuario{
    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    public function setIdUsuario($var){
        $this->idusuario = $var;
    }

    public function setDesLogin($var){
        $this->deslogin = $var;
    }

    public function setDesSenha($var){
        $this->dessenha = $var;
    }

    public function setDtCadastro($var){
        $this->dtcadastro = $var;
    }

    public function getIdUsuario(){
        return $this->idusuario;
    }

    public function getDesSenha(){
        return $this->dessenha;
    }

    public function getDesLogin(){
        return $this->deslogin;
    }

    public function getDtcadastro(){
        return $this->dtcadastro;
    }

    public function loadById($id){
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuarios = :id", array(
            ":id" => $id
        ));
        if(count($results) > 0){
            $row = $results[0];
            $this->setIdUsuario($row["idusuarios"]);
            $this->setDesLogin($row["deslogin"]);
            $this->setDesSenha($row["dessenha"]);
            $this->setDtCadastro(new DateTime($row["dtcadastro"]));


        }
         
    }

    public static function getList(){
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuarios ORDER BY idusuarios");
    }

    public static function search($login){
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :login ORDER BY deslogin",array(
            ":login" => "%$login%"
        ));
    }

    public function login($user,$pass){
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :user AND dessenha = :pass", array(
            ":user" => $user,
            ":pass" => $pass
        ));  
        if(count($results) > 0){
            $row = $results[0];
            $this->setIdUsuario($row["idusuarios"]);
            $this->setDesLogin($row["deslogin"]);
            $this->setDesSenha($row["dessenha"]);
            $this->setDtCadastro(new DateTime($row["dtcadastro"]));


        } else {
            throw new Exception("Login e/ou senha inválido");
        }
    }

    public function __toString(){
        return json_encode(array(
            "idusuarios" => $this->getIdUsuario(),
            "deslogin" => $this->getDesLogin(),
            "dessenha" => $this->getDesSenha(),
            "dtcadastro" => $this->getDtcadastro()->format("d/m/Y H:i:s") 
        ));
    }
}