<?php

require_once("Pais.php");

class Atleta {
    private string $nome;
    private int $idade;
    private string $esporte;
    private Pais $pais;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    public function getEsporte(): string
    {
        return $this->esporte;
    }

    public function setEsporte(string $esporte): self
    {
        $this->esporte = $esporte;

        return $this;
    }

    public function getPais(): Pais
    {
        return $this->pais;
    }

    public function setPais(Pais $pais): self
    {
        $this->pais = $pais;

        return $this;
    }
}