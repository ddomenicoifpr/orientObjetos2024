<?php

class Carro {
    private $modelo;
    private $marca;
    private $anoFabricacao;
    private $velocidadeMax;

    public function dadosCarro() {
        $dados = $this->modelo . "-" . $this->getMarca() . 
        ", fabricado em " . $this->getAnoFabricacao() . 
        ", com velocidade máxima de " . 
        $this->velocidadeMax . "km/h.\n";
        return $dados;
    }

    public function __toString()
    {
        $dados = $this->modelo . "-" . $this->getMarca() . 
        ", fabricado em " . $this->getAnoFabricacao() . 
        ", com velocidade máxima de " . 
        $this->velocidadeMax . "km/h.\n";
        return $dados;
    }

    /**
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of anoFabricacao
     */
    public function getAnoFabricacao()
    {
        return $this->anoFabricacao;
    }

    /**
     * Set the value of anoFabricacao
     */
    public function setAnoFabricacao($anoFabricacao): self
    {
        $this->anoFabricacao = $anoFabricacao;

        return $this;
    }

    /**
     * Get the value of velocidadeMax
     */
    public function getVelocidadeMax()
    {
        return $this->velocidadeMax;
    }

    /**
     * Set the value of velocidadeMax
     */
    public function setVelocidadeMax($velocidadeMax): self
    {
        $this->velocidadeMax = $velocidadeMax;

        return $this;
    }

} //Fim classe Carro

//Ler os dados
$carro1 = new Carro();
$carro1->setModelo(readline("Informe o modelo: ")); 
$carro1->setMarca(readline("Informe o marca: "));
$carro1->setAnoFabricacao(readline("Informe o ano: "));
$carro1->setVelocidadeMax(readline("Informe o vel. máxima: "));

echo "\n";
$carro2 = new Carro();
$carro2->setModelo(readline("Informe o modelo: ")); 
$carro2->setMarca(readline("Informe o marca: "));
$carro2->setAnoFabricacao(readline("Informe o ano: "));
$carro2->setVelocidadeMax(readline("Informe o vel. máxima: "));

echo "\n";
$carro3 = new Carro();
$carro3->setModelo(readline("Informe o modelo: ")); 
$carro3->setMarca(readline("Informe o marca: "));
$carro3->setAnoFabricacao(readline("Informe o ano: "));
$carro3->setVelocidadeMax(readline("Informe o vel. máxima: "));

//Encontrar o carro mais rápido
if($carro1->getVelocidadeMax() > $carro2->getVelocidadeMax() &&
   $carro1->getVelocidadeMax() > $carro3->getVelocidadeMax() ) {
    echo "O carro mais rápido é: " . $carro1;
} else {
    if($carro2->getVelocidadeMax() > $carro3->getVelocidadeMax())
        echo "O carro mais rápido é: " . $carro2;
    else
        echo "O carro mais rápido é: " . $carro3;
}

//Encontrar o carro mais lento
if($carro1->getVelocidadeMax() < $carro2->getVelocidadeMax() &&
   $carro1->getVelocidadeMax() < $carro3->getVelocidadeMax() ) {
    echo "O carro mais lento é: " . $carro1;
} else {
    if($carro2->getVelocidadeMax() < $carro3->getVelocidadeMax())
        echo "O carro mais lento é: " . $carro2;
    else
        echo "O carro mais lento é: " . $carro3;
}