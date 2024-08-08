<?php

 class Liquidificador { 
    
    //Atributos
    private $cor;
    private $marca;
    private $voltagem;
    private $capacidade;

    //Construitor
    public function __construct($cor) {
        $this->cor = $cor;        
    }

    //Métodos
    public function ligar() {
        echo "ligado\n";
        $this->girarMotor();
    }

    public function desligar() {
        echo "desligado\n";
        $this->pararMotor();
    }

    public function inverter() {
        echo "motor invertido\n";
    }

    private function girarMotor() {
        echo "motor girando\n";
    }

    private function pararMotor() {
        echo "motor parado\n";
    }

    //GETs e SETS
    
   
    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of voltagem
     */
    public function getVoltagem()
    {
        return $this->voltagem;
    }

    /**
     * Set the value of voltagem
     */
    public function setVoltagem($voltagem): self
    {
        $this->voltagem = $voltagem;

        return $this;
    }

    /**
     * Get the value of capacidade
     */
    public function getCapacidade()
    {
        return $this->capacidade;
    }

    /**
     * Set the value of capacidade
     */
    public function setCapacidade($capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }

    /**
     * Get the value of cor
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * Set the value of cor
     */
    public function setCor($cor): self
    {
        $this->cor = $cor;

        return $this;
    }
} //Fim da classe Liquidificador

//Progama principal
$liq = new Liquidificador("Vermelho");
$liq->ligar();
$liq->desligar();
echo "A cor do liquidificador é: " . $liq->getCor() . ".\n";
$liq->setMarca("Britania");
echo $liq->getMarca();
