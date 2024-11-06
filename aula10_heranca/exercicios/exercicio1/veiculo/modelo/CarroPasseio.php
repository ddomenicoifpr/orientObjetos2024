<?php

require_once("Veiculo.php");

class CarroPasseio extends Veiculo {

    private int $qtdPassageiros;

    public function getDados() {
        $dados = sprintf("Modelo: %s | Velocidade máx: %dkm/h | Cor: %s | Quant. Passageiros: %d\n", 
                        $this->modelo, $this->velocidadeMax, 
                        $this->cor, $this->qtdPassageiros);
        return $dados;
    }

    /**
     * Get the value of qtdPassageiros
     */
    public function getQtdPassageiros(): int
    {
        return $this->qtdPassageiros;
    }

    /**
     * Set the value of qtdPassageiros
     */
    public function setQtdPassageiros(int $qtdPassageiros): self
    {
        $this->qtdPassageiros = $qtdPassageiros;

        return $this;
    }

}