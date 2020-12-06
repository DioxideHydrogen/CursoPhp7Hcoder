<?php

class Documento {

    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($num){
        $this->numero = $num;
    }
}

class CPF extends Documento {

    public function validar() : bool{
        // Validação do cpf
        $cpf = $this->getNumero();

        return true;
    }
}

$doc = new CPF();
$doc->setNumero('11122233344');

var_dump($doc->validar());