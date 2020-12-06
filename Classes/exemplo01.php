<?php

// Nome de classes começam com letra maiúscula
class Pessoa
{
    //Atributos

    public $nome;

    public function falar(){
        return "O meu nome é " . $this->nome;
    }

}

$pessoa = new Pessoa();
$pessoa->nome = "Hugo Henrique";
echo $pessoa->falar();