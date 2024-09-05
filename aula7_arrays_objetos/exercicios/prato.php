<?php

class Prato {
    private $descricao;
    private $quantidade;
    private $valorUnitario;

    public function getValorTotal() {
        $valor = $this->quantidade * $this->valorUnitario;
        return $valor;
    }

    public function __toString() {
        return sprintf("Descrição: %s | Quantidade: %d | Val. Unit.: R$ %.2f | Val. Total: R$ %.2f\n",
            $this->descricao, $this->quantidade, 
            $this->valorUnitario, $this->getValorTotal());
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of quantidade
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     */
    public function setQuantidade($quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get the value of valorUnitario
     */
    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    /**
     * Set the value of valorUnitario
     */
    public function setValorUnitario($valorUnitario): self
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }
}

//Programa princial (início)

$pratos = array();

//Cadastrando os pratos
for($i=1; $i<=3; $i++) {
    echo "\nPrato " . $i . ":\n";
    $prato = new Prato();
    $prato->setDescricao(readline("Informe a descrição: "));
    $prato->setQuantidade(readline("Informe a quantidade: "));
    $prato->setValorUnitario(readline("Informe o valor unitário: "));

    array_push($pratos, $prato);
}

//Listar os pratos
echo "\n\nListagem dos pratos da Janta:\n";
$valorJanta = 0;
foreach($pratos as $prato) {
    echo $prato;
    $valorJanta = $valorJanta + $prato->getValorTotal();
}

printf("\nValor total da janta: R$ %.2f\n", $valorJanta);
