<?php

class Animal {
    protected string $nome;
    private string $raca;

    public function __construct($n="", $r="") {
        $this->nome = $n;
        $this->raca = $r;        
    }

    public function __toString() {
        return sprintf("Nome: %s | Raça: %s\n", 
            $this->nome, $this->raca);        
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of raca
     */
    public function getRaca(): string
    {
        return $this->raca;
    }

    /**
     * Set the value of raca
     */
    public function setRaca(string $raca): self
    {
        $this->raca = $raca;

        return $this;
    }
}