<?php

class Produto {

    protected string $descricao;
    protected string $unidadeMedida;

    //Métodos
    public function getDados() {
        $dados = "Descricao: " . $this->descricao;
        $dados .= " | Unidade de Medida: " . $this->unidadeMedida;
        $dados .= "\n";

        return $dados;
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

    public function getUnidadeMedida(): string
    {
        return $this->unidadeMedida;
    }

    public function setUnidadeMedida(string $unidadeMedida): self
    {
        $this->unidadeMedida = $unidadeMedida;

        return $this;
    }
}