<?php

abstract class Animal {
    public function falar(){
        return "Som";
    }

    public function mover(){
        return "Anda";
    }
}

class Cachorro extends Animal{
    public function falar(){
        return "Late";
    }
}

class Cobra extends Animal{
    public function falar(){
        return "Sibila";
    }

    public function mover(){
        return "Arrasta";
    }
}

class Passaro extends Animal {
    public function falar(){
        return "Pia e Canta";
    }

    public function mover(){
        return "Voa e " . parent::mover();
    }
}

$pluto = new Cachorro();
echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";
echo "<hr>";
// :) Easter Egg
$python = new Cobra();
echo $python->falar() . "<br>";
echo $python->mover() . "<br>";
echo "<hr>";
// :) Easter Egg
$passaro = new Passaro();
echo $passaro->falar() . "<br>";
echo $passaro->mover() . "<br>";
