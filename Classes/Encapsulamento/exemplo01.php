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

$a = new Pessoa();

echo "A <hr>";

$a->verDados();

echo "<hr>A<hr> <br>";

echo $a->nome . '<br>';
echo $a->idade . '<br>';
echo $a->senha . '<br>';

