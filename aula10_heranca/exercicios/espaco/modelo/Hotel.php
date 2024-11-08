<?php

require_once("Espaco.php");

class Hotel extends Espaco {

    private int $numeroEstrelas;
    private bool $cafeIncluso;

    public function getDadosHotel() {
        $dados = "HOTEL - ";
        $dados .= $this->getDadosEspaco();
        $dados .= " | Número de estrelas: " . $this->numeroEstrelas;
        $dados .= " | Café incluso: " . ($this->cafeIncluso ? "Sim" : "Não") . "\n";
        return $dados; 
    }

    public function getNumeroEstrelas(): int
    {
        return $this->numeroEstrelas;
    }

    public function setNumeroEstrelas(int $numeroEstrelas): self
    {
        $this->numeroEstrelas = $numeroEstrelas;

        return $this;
    }

    public function isCafeIncluso(): bool
    {
        return $this->cafeIncluso;
    }

    public function setCafeIncluso(bool $cafeIncluso): self
    {
        $this->cafeIncluso = $cafeIncluso;

        return $this;
    }
}