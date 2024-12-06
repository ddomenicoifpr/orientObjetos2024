<?php

require_once("Ingresso.php");

class IngressoVIP extends Ingresso {

    private float $valorAdicional;

    //Método sobreescrito
    public function getValorTotal() {
        return parent::getValorTotal() + $this->valorAdicional;
    }

    //Gets e Sets
    public function getValorAdicional(): float
    {
        return $this->valorAdicional;
    }

    public function setValorAdicional(float $valorAdicional): self
    {
        $this->valorAdicional = $valorAdicional;

        return $this;
    }
}