<?php 

require_once("IRadio.php");

class RadioPortatil implements IRadio {

    private bool $am;
    private bool $fm;

    public function ligarRadio() {
        echo "Rádio portátil ligado!\n";
    }

    public function desligarRadio() {
        echo "Rádio portátil desligado!\n";
    }

    
    /**
     * Get the value of am
     */
    public function isAm(): bool
    {
        return $this->am;
    }

    /**
     * Set the value of am
     */
    public function setAm(bool $am): self
    {
        $this->am = $am;

        return $this;
    }

    /**
     * Get the value of fm
     */
    public function isFm(): bool
    {
        return $this->fm;
    }

    /**
     * Set the value of fm
     */
    public function setFm(bool $fm): self
    {
        $this->fm = $fm;

        return $this;
    }
}