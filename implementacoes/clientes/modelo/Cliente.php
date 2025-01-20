<?php 

abstract class Cliente {

    //Atributos
    protected int $id;
    protected string $nomeSocial;
    protected string $email;

    //Métodos
    public abstract function getIdentificacao();
    public abstract function getNroDoc();
    public abstract function getTipo();

    //GETs e SET
    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nomeSocial
     */
    public function getNomeSocial(): string
    {
        return $this->nomeSocial;
    }

    /**
     * Set the value of nomeSocial
     */
    public function setNomeSocial(string $nomeSocial): self
    {
        $this->nomeSocial = $nomeSocial;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}