<?php

class Robo {
    private string $nome;
    private string $tipo;
    private int $qtdSensores;

    //Construtor
    public function __construct($n="", $t="", $qtS=0) {
        $this->nome = $n;
        $this->tipo = $t;
        $this->qtdSensores = $qtS;
    }

    //Métodos
    public function __toString() {
        return $this->nome . " - " . $this->tipo . "\n";        
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo(): string
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of qtdSensores
     */
    public function getQtdSensores(): int
    {
        return $this->qtdSensores;
    }

    /**
     * Set the value of qtdSensores
     */
    public function setQtdSensores(int $qtdSensores): self
    {
        $this->qtdSensores = $qtdSensores;

        return $this;
    }
}

//Programa principal
$robo1 = new Robo();
$robo1->setNome("Máquina Mistério")
      ->setTipo("Arduino")->setQtdSensores(4);

$robo2 = new Robo();
$robo2->setNome("Charles Lecrash")
    ->setTipo("Lego")->setQtdSensores(2);

$robo3 = new Robo();
$robo3->setNome("Juliete")
    ->setTipo("Arduino")->setQtdSensores(3);

$robos = array($robo1, $robo2);
echo $robos[1]->getNome() . "\n";

array_push($robos, $robo3);
echo $robos[2]->getTipo() . "\n";
echo $robos[2]; //Imprime o objeto por meio do método toString

//Laço for
/*
for($i=0; $i<count($robos); $i++)
    echo $robos[$i]->getNome() . "\n";
*/

array_push($robos, new Robo("Laercio", "Arduino", 3));

//Laço foreach
//foreach($robos as $r)
//    echo $r->getNome() . "\n";

$algumRobo = $robos[3];
echo $algumRobo->getTipo() . "\n";
echo $robos[3]->getTipo() . "\n";