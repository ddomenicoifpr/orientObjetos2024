<?php

require_once("Poder.php");

class Mago {
    protected string $nome;
    protected Poder $poder;

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
     * Get the value of poder
     */
    public function getPoder(): Poder
    {
        return $this->poder;
    }

    /**
     * Set the value of poder
     */
    public function setPoder(Poder $poder): self
    {
        $this->poder = $poder;

        return $this;
    }
}