<?php

require_once("Turma.php");

class Aluno {
    private string $nome;
    private int $idade;
    private Turma $turma;

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
     * Get the value of idade
     */
    public function getIdade(): int
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of turma
     */
    public function getTurma(): Turma
    {
        return $this->turma;
    }

    /**
     * Set the value of turma
     */
    public function setTurma(Turma $turma): self
    {
        $this->turma = $turma;

        return $this;
    }
}