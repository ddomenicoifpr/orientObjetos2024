<?php

require_once("IRadio.php");
require_once("IRelogio.php");

class RadioRelogio implements IRadio, IRelogio {

    private string $corVisor;

    public function ligarRadio() {
        echo "Rádio relógio ligado!\n";
    }

    public function desligarRadio() {
        echo "Rádio relógio desligado!\n";
    }

    public function mostrarHora() {
        echo date("d/m/Y \à\s H:i") . "\n";
    }
    

    /**
     * Get the value of corVisor
     */
    public function getCorVisor(): string
    {
        return $this->corVisor;
    }

    /**
     * Set the value of corVisor
     */
    public function setCorVisor(string $corVisor): self
    {
        $this->corVisor = $corVisor;

        return $this;
    }
}