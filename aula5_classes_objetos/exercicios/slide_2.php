<?php

class Retangulo {
    public $base;
    public $altura;

    function __construct($a=0, $b=0) {
        $this->altura = $a;
        $this->base = $b;
    }

    function area() {
        return $this->base * $this->altura;
    }

    function perimetro() {
        return $this->base + $this->base + 
            $this->altura + $this->altura;
    }
}

//Programa principal
for($i=0; $i<3; $i++) {
    $altura = readline("Informe a altura: ");
    $base = readline("Informe a base: ");
    
    $ret = new Retangulo($altura, $base);
    echo "Área do retângulo: " . $ret->area() . "\n";
    echo "Perímetro do retângulo: " . $ret->perimetro() . "\n\n";
}
