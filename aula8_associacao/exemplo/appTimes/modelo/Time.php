<?php 

class Time {

    private string $nome;
    private string $cidade;

    private array $jogadores;


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
     * Get the value of cidade
     */
    public function getCidade(): string
    {
        return $this->cidade;
    }

    /**
     * Set the value of cidade
     */
    public function setCidade(string $cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get the value of jogadores
     */
    public function getJogadores(): array
    {
        return $this->jogadores;
    }

    /**
     * Set the value of jogadores
     */
    public function setJogadores(array $jogadores): self
    {
        $this->jogadores = $jogadores;

        return $this;
    }
}