<?php

require_once("config.php");

// Todos os usuários
// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
// echo json_encode($usuarios);

// Um usuário pelo ID
// $root = new Usuario();
// $root->loadById(1);
// echo $root; 

// Todos os usuários
// $lista = Usuario::getList();
// echo json_encode($lista);

// Procura um usuário pelo nome
// $usuario = Usuario::search("ro");
// echo json_encode($usuario);

// Usuário por login e senha
// $usuario = new Usuario();
// $usuario->login("jose","1234567890");
// echo $usuario; 

// Insere usuários no sistema
// $aluno = new Usuario();
// $aluno->setDesLogin("aluno");
// $aluno->setDesSenha("@lun0");
// $aluno->insert();
// echo $aluno;

// Atualizando usuários
// $usuario = new Usuario();
// $usuario->setIdUsuario(3);
// $usuario->update("professor","!@#$%¨&*");
// echo "Atualizado";

//Removendo usuários
$usuario = new Usuario();
$usuario->setIdUsuario(3);
$usuario->delete();
echo "DELETADO";