<?php

require_once("IFormaGeometrica.php");

class Quadrado implements IFormaGeometrica {
    private int $lado;

    public function getArea() {
        return $this->lado * $this->lado;
    }

    public function getDesenho() {
        $desenho = 
        "┌──────────┐
         │          │
         │          │
         │          │
         │          │
         │          │
         └──────────┘\n";
        return $desenho;
    }


    /**
     * Get the value of lado
     */
    public function getLado(): int
    {
        return $this->lado;
    }

    /**
     * Set the value of lado
     */
    public function setLado(int $lado): self
    {
        $this->lado = $lado;

        return $this;
    }
}