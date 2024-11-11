<?php

require_once("Mago.php");

class Combatente extends Mago {

    private int $forcaDeAtaque;

    public function lancarPoder() {
        echo "O mago " . $this->nome . ", do tipo Combatente, possui força de " . 
            $this->forcaDeAtaque . " e lançou o poder " . $this->poder->getDescricao() . 
            " com força total de " . $this->poder->getForcaTotal($this->forcaDeAtaque) . ".\n";
    }

    /**
     * Get the value of forcaDeAtaque
     */
    public function getForcaDeAtaque(): int
    {
        return $this->forcaDeAtaque;
    }

    /**
     * Set the value of forcaDeAtaque
     */
    public function setForcaDeAtaque(int $forcaDeAtaque): self
    {
        $this->forcaDeAtaque = $forcaDeAtaque;

        return $this;
    }
}