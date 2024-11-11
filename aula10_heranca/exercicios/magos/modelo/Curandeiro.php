<?php

require_once("Mago.php");

class Curandeiro extends Mago {

    private int $forcaDeCura;

    public function lancarPoder() {
        echo "O mago " . $this->nome . ", do tipo Curandeiro, possui força de " . 
            $this->forcaDeCura . " e lançou o poder " . $this->poder->getDescricao() . 
            " com força total de " . $this->poder->getForcaTotal($this->forcaDeCura) . ".\n";
    }

    /**
     * Get the value of forcaDeCura
     */
    public function getForcaDeCura(): int
    {
        return $this->forcaDeCura;
    }

    /**
     * Set the value of forcaDeCura
     */
    public function setForcaDeCura(int $forcaDeCura): self
    {
        $this->forcaDeCura = $forcaDeCura;

        return $this;
    }
}