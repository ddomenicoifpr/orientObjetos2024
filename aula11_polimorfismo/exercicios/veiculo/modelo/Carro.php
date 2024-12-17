<?php

require_once("Veiculo.php");

class Carro extends Veiculo {

    public function getCustoViagem() {
        $custo = $this->valorAluguel + ($this->kmRodados * 1.5);
        return $custo;
    }

}