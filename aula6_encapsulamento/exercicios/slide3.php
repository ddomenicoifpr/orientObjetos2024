<?php

class Livro {
    //Atributos
    private $titulo;
    private $autor;
    private $genero;
    private $nroPaginas;

    //Método toString é executado quando o objeto é impresso
    public function __toString()
    {
        $livro = "Título: " . $this->titulo;
        $livro .= " | Autor: " . $this->autor;
        $livro .= " | Gênero: " . $this->genero;
        $livro .= " | Número de páginas: " . $this->nroPaginas;
        return $livro . "\n";
    }

    //GETs e SETs
    


    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     */
    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of nroPaginas
     */
    public function getNroPaginas()
    {
        return $this->nroPaginas;
    }

    /**
     * Set the value of nroPaginas
     */
    public function setNroPaginas($nroPaginas): self
    {
        $this->nroPaginas = $nroPaginas;

        return $this;
    }

}//Fim classe Livro

//Programa principal
echo "----LIVRO 1----\n";
$l1 = new Livro();
$l1->setTitulo(readline("Informe o título: "));
$l1->setAutor(readline("Informe o autor: "));
$l1->setGenero(readline("Informe o gênero: "));
$l1->setNroPaginas(readline("Informe o número de páginas: "));

echo "\n\n----LIVRO 2----\n";
$l2 = new Livro();
$l2->setTitulo(readline("Informe o título: "));
$l2->setAutor(readline("Informe o autor: "));
$l2->setGenero(readline("Informe o gênero: "));
$l2->setNroPaginas(readline("Informe o número de páginas: "));

echo "\n\n----LIVRO 3----\n";
$l3 = new Livro();
$l3->setTitulo(readline("Informe o título: "));
$l3->setAutor(readline("Informe o autor: "));
$l3->setGenero(readline("Informe o gênero: "));
$l3->setNroPaginas(readline("Informe o número de páginas: "));

$livroMaisPaginas = $l1;

if($l2->getNroPaginas() > $livroMaisPaginas->getNroPaginas())
    $livroMaisPaginas = $l2;

if($l3->getNroPaginas() > $livroMaisPaginas->getNroPaginas())
    $livroMaisPaginas = $l3;


//Impressão dos dados do livro com mais páginas
echo "\n\nDados do livro com mais páginas:\n";
echo $livroMaisPaginas; //Funciona pois a classe livro tem o método toString();