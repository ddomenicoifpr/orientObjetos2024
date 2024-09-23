<?php

class Pais {

    private string $nome;
    private string $continente;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getContinente(): string
    {
        return $this->continente;
    }

    public function setContinente(string $continente): self
    {
        $this->continente = $continente;

        return $this;
    }
}