<?php

class Escola {
    private $nome;
    private $endereco;
    private $qtdAlunos;

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     */
    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of qtdAlunos
     */
    public function getQtdAlunos()
    {
        return $this->qtdAlunos;
    }

    /**
     * Set the value of qtdAlunos
     */
    public function setQtdAlunos($qtdAlunos): self
    {
        $this->qtdAlunos = $qtdAlunos;

        return $this;
    }
}

//Programa principal
$escolas = array();

//1.1
for($i=0; $i<4; $i++) {
    $escola = new Escola();
    $escola->setNome(readline("Informe o nome da escola: "));
    $escola->setEndereco(readline("Informe o endereço da escola: "));
    $escola->setQtdAlunos(
            readline("Informe a quantidade de alunos da escola: "));

    array_push($escolas, $escola);
}

//1.2
foreach($escolas as $esc) {
    //echo $esc; Funciona se a classe tiver o __toString implementado
    printf("%s | %s | %d\n", 
        $esc->getNome(), $esc->getEndereco(), $esc->getQtdAlunos());
}

//1.3
$escolaMaisAluno = $escolas[0];
foreach($escolas as $esc) {
    if($esc->getQtdAlunos() > $escolaMaisAluno->getQtdAlunos())
        $escolaMaisAluno = $esc;
}
echo "\nEscola com mais alunos: ";
printf("%s | %s | %d\n", 
        $escolaMaisAluno->getNome(), $escolaMaisAluno->getEndereco(), 
        $escolaMaisAluno->getQtdAlunos());
