<?php

class Libro
{
    private int $id;
    private string $titulo;
    private string $autor;
    private int $paginas;
    private string $editorial;

    function Libro(int $id, string $titulo, string $autor, int $paginas, string $editorial) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->editorial = $editorial;
    }

    
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    public function getPaginas()
    {
        return $this->paginas;
    }

    public function setPaginas($paginas)
    {
        $this->paginas = $paginas;

        return $this;
    }

    public function getEditorial()
    {
        return $this->editorial;
    }

    public function setEditorial($editorial)
    {
        $this->editorial = $editorial;

        return $this;
    }

    public function toString() {
        echo "Titulo: " . $this->getTitulo() . "<br>";
        echo "Autor: " . $this->getAutor() . "<br>";
        echo "Paginas: " . $this->getPaginas() . "<br>";
        echo "Editorial: " . $this->getEditorial() . "<br>";
    }
}

?>