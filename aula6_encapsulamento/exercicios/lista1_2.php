<?php

class Calculadora {
    //Atributos
    private $numA;
    private $numB;

    //Métodos
    public function soma() {
        return $this->numA + $this->numB;
    }

    public function subtracao() {
        return $this->numA - $this->numB;
    }

    public function multiplicacao() {
        return $this->numA * $this->numB;
    }

    public function divisao() {
        return $this->numA / $this->numB;
    }

    public function resto() {
        return $this->numA % $this->numB;
    }

    //GETs e SETs
    

    /**
     * Get the value of numA
     */
    public function getNumA()
    {
        return $this->numA;
    }

    /**
     * Set the value of numA
     */
    public function setNumA($numA): self
    {
        $this->numA = $numA;

        return $this;
    }

    /**
     * Get the value of numB
     */
    public function getNumB()
    {
        return $this->numB;
    }

    /**
     * Set the value of numB
     */
    public function setNumB($numB): self
    {
        $this->numB = $numB;

        return $this;
    }
}

//Programa principal
$calculadora = new Calculadora();
$calculadora->setNumA(readline("Informe o primeiro número: "));
$calculadora->setNumB(readline("Informe o segundo número: "));

printf("\nResultado das operações entre %d e %d:\n", $calculadora->getNumA(), $calculadora->getNumB());
printf("Soma: %d\n", $calculadora->soma());
printf("Subtração: %d\n", $calculadora->subtracao());
printf("Multiplicação: %d\n", $calculadora->multiplicacao());
printf("Divisão: %d\n", $calculadora->divisao());
printf("Resto: %d\n", $calculadora->resto());




