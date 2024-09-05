<?php

class Trapezio {
    private float $baseMaior;
    private float $baseMenor;
    private float $altura;

    public function getArea() {
        $area = ( ($this->baseMaior + $this->baseMenor) * $this->altura ) / 2;
        return $area;
    }

    public function __toString() {
        return sprintf("Base maior: %.2f cm², Base menor: %.2f cm², Altura: %.2f cm², Área: %.2f cm²\n",
                        $this->baseMaior, $this->baseMenor, $this->altura, $this->getArea());
    }

    /**
     * Get the value of baseMaior
     */
    public function getBaseMaior(): float
    {
        return $this->baseMaior;
    }

    /**
     * Set the value of baseMaior
     */
    public function setBaseMaior(float $baseMaior): self
    {
        $this->baseMaior = $baseMaior;

        return $this;
    }

    /**
     * Get the value of baseMenor
     */
    public function getBaseMenor(): float
    {
        return $this->baseMenor;
    }

    /**
     * Set the value of baseMenor
     */
    public function setBaseMenor(float $baseMenor): self
    {
        $this->baseMenor = $baseMenor;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura(): float
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura(float $altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}

//Programa principal

$trapezios = array();

//Cadastrando os trapézios
for($i=1; $i<=4; $i++) {
    echo "\nTrapézio " . $i . ":\n";

    $trap = new Trapezio();
    $trap->setBaseMaior(readline("Informe a base maior (cm²): "));
    $trap->setBaseMenor(readline("Informe a base menor (cm²): "));
    $trap->setAltura(readline("Informe a altura (cm²): "));

    array_push($trapezios, $trap);
}

//Encontrando o trapézio com maior área
$trapzioMaiorArea = $trapezios[0];
foreach($trapezios as $trap) {
    if($trap->getArea() > $trapzioMaiorArea->getArea())
        $trapzioMaiorArea = $trap;
}

echo "\nTrapézio com maior área:\n";
echo $trapzioMaiorArea;