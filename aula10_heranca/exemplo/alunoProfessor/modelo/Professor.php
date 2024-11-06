<?php

require_once("Pessoa.php");

class Professor extends Pessoa {
    private $salario;

    public function __toString() {
        $dados = "Nome: " . $this->getNome();
        $dados .= " | RG: " . $this->getRg();
        $dados .= " | Idade: " . $this->getIdade();
        $dados .= " | Salário: " . $this->salario;
        $dados .= "\n";
        return $dados;
    }

    /**
     * Get the value of salario
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     */
    public function setSalario($salario): self
    {
        $this->salario = $salario;

        return $this;
    }
}