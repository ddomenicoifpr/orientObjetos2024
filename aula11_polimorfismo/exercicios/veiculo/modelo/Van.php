<?php

require_once("Veiculo.php");

class Van extends Veiculo {

    public function getCustoViagem() {
        $custo = $this->valorAluguel + ($this->kmRodados * 2.1);
        return $custo;
    }

}