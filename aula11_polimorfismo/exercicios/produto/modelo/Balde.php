<?php

require_once("Produto.php");

class Balde extends Produto {

    private int $capacidade;

    //Método sobreescrito
    public function getDados() {
        $dados = "Descricao: " . $this->descricao;
        $dados .= " | Unidade de Medida: " . $this->unidadeMedida;
        $dados .= " | Capacidade: " . $this->capacidade . "  litros";
        $dados .= "\n";

        return $dados;
    }

    public function getCapacidade(): int
    {
        return $this->capacidade;
    }

    public function setCapacidade(int $capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }
}