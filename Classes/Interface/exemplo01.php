<?php

interface Veiculo {
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
}

class Automovel implements Veiculo {
    public function acelerar($velocidade){
        printf("Acelerei até %sKm/h <br>",$velocidade);
    }

    public function freiar($velocidade){
        printf("Acelerei até %.2fKm/h <br>",$velocidade);
    }

    public function trocarMarcha($marcha){
        printf("Troquei a marcha para a %uª <br>",$marcha);
    }
}

$a = new Automovel();
$a->acelerar(200);
$a->freiar(100);
$a->trocarMarcha(5);
