<?php

require_once("Pessoa.php");

class Aluno extends Pessoa {
    private $matricula;

    public function __toString() {
        $dados = "Nome: " . $this->nome;
        $dados .= " | RG: " . $this->getRg();
        $dados .= " | Idade: " . $this->getNomeIdade();
        $dados .= " | Matricula: " . $this->matricula;
        $dados .= "\n";
        return $dados;
    }

    /**
     * Get the value of matricula
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     */
    public function setMatricula($matricula): self
    {
        $this->matricula = $matricula;

        return $this;
    }
}