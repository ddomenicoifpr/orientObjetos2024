<?php

require_once("Veiculo.php");

class Onibus extends Veiculo {

    public function getCustoViagem() {
        $custo = $this->valorAluguel + ($this->kmRodados * 4.2);
        return $custo;
    }

}