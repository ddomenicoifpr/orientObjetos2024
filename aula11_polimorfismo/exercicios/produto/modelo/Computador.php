<?php

require_once("Produto.php");

class Computador extends Produto {

    private string $processador;
    private string $memoria;

    //Método sobreescrito
    public function getDados() {
        $dados = "Descricao: " . $this->descricao;
        $dados .= " | Unidade de Medida: " . $this->unidadeMedida;
        $dados .= " | Processador: " . $this->processador;
        $dados .= " | Memória: " . $this->memoria;
        $dados .= "\n";

        return $dados;
    }

    public function getProcessador(): string
    {
        return $this->processador;
    }

    public function setProcessador(string $processador): self
    {
        $this->processador = $processador;

        return $this;
    }

    public function getMemoria(): string
    {
        return $this->memoria;
    }

    public function setMemoria(string $memoria): self
    {
        $this->memoria = $memoria;

        return $this;
    }
}