<?php

require_once("Calculadora.php");

class Subtracao extends Calculadora {

    public function calcular() {
        $resultado = $this->numA - $this->getNumB();
        return $resultado;
    }

}