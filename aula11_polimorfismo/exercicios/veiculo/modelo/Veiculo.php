<?php

abstract class Veiculo {

    protected float $valorAluguel;
    protected int $kmRodados;

    public abstract function getCustoViagem();

    public function getValorAluguel(): float
    {
        return $this->valorAluguel;
    }

    public function setValorAluguel(float $valorAluguel): self
    {
        $this->valorAluguel = $valorAluguel;

        return $this;
    }

    public function getKmRodados(): int
    {
        return $this->kmRodados;
    }

    public function setKmRodados(int $kmRodados): self
    {
        $this->kmRodados = $kmRodados;

        return $this;
    }
}