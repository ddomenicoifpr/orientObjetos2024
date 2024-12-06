<?php

class Ingresso {
    private float $valor;

    //Métodos
    public function getValorTotal() {
        return $this->valor;
    }

    //Gets e Sets
    public function getValor(): float
    {
        return $this->valor;
    }

    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}