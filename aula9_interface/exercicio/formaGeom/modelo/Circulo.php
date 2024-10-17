<?php

require_once("IFormaGeometrica.php");

class Circulo implements IFormaGeometrica {

    private int $raio;

    public function getArea() {
        return 3.14 * $this->raio * $this->raio;
    }

    public function getDesenho() {
        $desenho = 
        "   xxxxxxxxx\n" .   
        " xxx       xxx\n" .
        "xx           xx\n" .
        "x             x\n" .
        "x             x\n" .
        "x             x\n" .
        "xx            x\n" .
        " xxx        xxx\n" .
        "   xxxxxxxxxx\n";
        return $desenho;
    }

    /**
     * Get the value of raio
     */
    public function getRaio(): int
    {
        return $this->raio;
    }

    /**
     * Set the value of raio
     */
    public function setRaio(int $raio): self
    {
        $this->raio = $raio;

        return $this;
    }
}