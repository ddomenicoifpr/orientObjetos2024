<?php

class Midia {

    private string $descricao;
    private float $precoPago;

    //Métodos
    public function getDados() {
        return sprintf( "Descrição: %s | Preço pago: R$ %s\n", 
            $this->descricao, number_format($this->precoPago, 2, ",", ".") );
    }

    public function getTipo() {
        return "Mídia genérica!";
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getPrecoPago(): float
    {
        return $this->precoPago;
    }

    public function setPrecoPago(float $precoPago): self
    {
        $this->precoPago = $precoPago;

        return $this;
    }
    
}