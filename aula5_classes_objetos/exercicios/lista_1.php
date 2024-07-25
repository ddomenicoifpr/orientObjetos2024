<?php

class Animal {

    public $especie;
    public $numeroPatas;
    public $tipoPele;
    public $tipoSom;
    public $tipoMovimento;

    function emitirSom() {
        echo $this->tipoSom . "\n";
    }

    function movimentar() {
        printf("%s movimenta-se %s\n", 
            $this->especie, $this->tipoMovimento);
    }
}

$animal1 = new Animal();
$animal1->especie = "Vaca";
$animal1->numeroPatas = 4;
$animal1->tipoPele = "pelos";
$animal1->tipoSom = "Muu muuu muuu";
$animal1->tipoMovimento = "pelo chão";
$animal1->emitirSom();
$animal1->movimentar();

echo "\n";

$animal2 = new Animal();
$animal2->especie = "Galo";
$animal2->numeroPatas = 2;
$animal2->tipoPele = "penas";
$animal2->tipoSom = "Cócoricóóó";
$animal2->tipoMovimento = "voando";
$animal2->emitirSom();
$animal2->movimentar();