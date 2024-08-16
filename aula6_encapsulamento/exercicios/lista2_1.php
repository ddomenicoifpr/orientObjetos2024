<?php

class Cidade {
    //Atributos
    private $nome;
    private $populacao;
    private $area;
    private $pib;

    //Métodos
    public function aumentarPopulacao($quantidade) {
        $this->populacao += $quantidade;
    }

    public function reduzirPopulacao($quantidade) {
        $this->populacao += $quantidade;
    }

    public function getPibPerCapta() {
        $pibPerCapta = $this->pib / $this->populacao;
        return $pibPerCapta;
    }

    public function __toString() {
        $dados = sprintf("Nome: %s\nPopulação: %d\nÁrea:%dkm²\nPIB: R$ %d\n", 
            $this->nome, $this->populacao, $this->area, $this->pib);
        return $dados;
    }

    //GETs e SETs
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
     * Get the value of populacao
     */
    public function getPopulacao()
    {
        return $this->populacao;
    }

    /**
     * Set the value of populacao
     */
    public function setPopulacao($populacao): self
    {
        $this->populacao = $populacao;

        return $this;
    }

    /**
     * Get the value of area
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set the value of area
     */
    public function setArea($area): self
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get the value of pib
     */
    public function getPib()
    {
        return $this->pib;
    }

    /**
     * Set the value of pib
     */
    public function setPib($pib): self
    {
        $this->pib = $pib;

        return $this;
    }
}

//Objeto para utilizar a classe
$foz = new Cidade();
$foz->setNome("Foz do Iguaçu")->setArea(617.701)->setPopulacao(258248)->setPib(19000000000);
$foz->aumentarPopulacao(500);
$foz->reduzirPopulacao(222);
echo $foz;
echo "PIB per capta: R$ " . $foz->getPibPerCapta() . "\n";
