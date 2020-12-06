<?php

/**
 * 1 - Classe Pai
 * 2 - Classe Filha
 * 3 - Objeto
 * 
 * public -> 1,2,3
 * protected -> 1,2
 * private -> 1
 */

class Pessoa {
    public $nome = "Rasmus Lerdov";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados(){
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}

class Programador extends Pessoa{

    public function verDados(){
        echo get_class($this) . '<br>';
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }

}
$a = new Pessoa();

echo "A <hr>";

$a->verDados();

echo "B <hr>";
$b = new Programador();

$b->verDados();