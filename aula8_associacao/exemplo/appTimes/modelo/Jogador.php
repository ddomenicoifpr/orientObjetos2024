<?php

require_once("Time.php");

class Jogador {

    private string $nome;
    private int $numero;

    private Time $time;

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
     * Get the value of numero
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of time
     */
    public function getTime(): Time
    {
        return $this->time;
    }

    /**
     * Set the value of time
     */
    public function setTime(Time $time): self
    {
        $this->time = $time;

        return $this;
    }
}