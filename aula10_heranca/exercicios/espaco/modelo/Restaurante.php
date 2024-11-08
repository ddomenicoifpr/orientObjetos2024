<?php

require_once("Espaco.php");

class Restaurante extends Espaco {

    private string $tipoComida;

    public function getDadosRestaurante() {
        $dados = "RESTAURANTE - ";
        $dados .= $this->getDadosEspaco();
        $dados .= " | Tipo de comida: " . $this->tipoComida . "\n";
        return $dados;
    }

    public function getTipoComida(): string
    {
        return $this->tipoComida;
    }

    public function setTipoComida(string $tipoComida): self
    {
        $this->tipoComida = $tipoComida;

        return $this;
    }
}