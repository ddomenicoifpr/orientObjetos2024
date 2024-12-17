<?php

require_once("Veiculo.php");

class MicroOnibus extends Veiculo {

    public function getCustoViagem() {
        $custo = $this->valorAluguel + ($this->kmRodados * 2.75);
        return $custo;
    }

}