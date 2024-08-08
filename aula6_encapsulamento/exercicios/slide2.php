<?php

class Aluno {
    private string $nome;
    private float $nota1;
    private float $nota2;

    public function media() {
        return ($this->nota1 + $this->nota2) / 2;
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
     * Get the value of nota1
     */
    public function getNota1(): float
    {
        return $this->nota1;
    }

    /**
     * Set the value of nota1
     */
    public function setNota1(float $nota1): self
    {
        $this->nota1 = $nota1;

        return $this;
    }

    /**
     * Get the value of nota2
     */
    public function getNota2(): float
    {
        return $this->nota2;
    }

    /**
     * Set the value of nota2
     */
    public function setNota2(float $nota2): self
    {
        $this->nota2 = $nota2;

        return $this;
    }
}

//Ler os dados
for($i=0; $i<3; $i++) {
    $aluno = new Aluno();
    $nome = readline("Informe o nome: ");
    $aluno->setNome($nome);
    $aluno->setNota1(readline("Informe a nota 1: "));
    $aluno->setNota2(readline("Informe a nota 2: "));
    printf("O aluno %s possui média %.2f\n", 
            $aluno->getNome(), $aluno->media());
}
