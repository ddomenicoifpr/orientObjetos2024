<?php

require_once("IngressoVIP.php");

class IngressoCamarote extends IngressoVIP {

    private float $valorAdicionalCamarote;

    //Método sobreescrito
    public function getValorTotal() {
        return parent::getValorTotal() + $this->valorAdicionalCamarote;
    }

    //Gets e Sets
    public function getValorAdicionalCamarote(): float
    {
        return $this->valorAdicionalCamarote;
    }

    public function setValorAdicionalCamarote(float $valorAdicionalCamarote): self
    {
        $this->valorAdicionalCamarote = $valorAdicionalCamarote;

        return $this;
    }
}