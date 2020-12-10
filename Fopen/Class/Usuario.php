<?php

class Usuario{
    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    public function setIdUsuario($id){
        $this->idusuario = $id;
    }

    public function setDesLogin($login){
        $this->deslogin = $login;
    }

    public function setDesSenha($senha){
        $this->dessenha = $senha;
    }

    public function setDtCadastro($data){
        $this->dtcadastro = $data;
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

    
    public function insert(){
        $sql = new Sql();
        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)",array(
            ":LOGIN"=>$this->getDesLogin(),
            ":PASSWORD"=>$this->getDesSenha()            
        ));
        $row = $results[0];
        if(count($row) > 0){
            $this->setIdUsuario($row["idusuarios"]);
            $this->setDesLogin($row["deslogin"]);
            $this->setDesSenha($row["dessenha"]);
            $this->setDtCadastro(new DateTime($row["dtcadastro"]));
        }
    }


    public function update($login,$password){
        $this->setDesLogin($login);
        $this->setDesSenha($password);
        $sql = new Sql();
        $results = $sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID",array(
            ":LOGIN"=>$this->getDesLogin(),
            ":PASSWORD"=>$this->getDesSenha(),
            ":ID"=>$this->getIdUsuario()
        ));
    }

    public function delete(){
        $sql = new Sql();
        $results = $sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID",array(
            ":ID"=>$this->getIdUsuario()
        ));
        
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