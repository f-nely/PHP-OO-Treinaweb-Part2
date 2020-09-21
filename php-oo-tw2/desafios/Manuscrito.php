<?php



class Manuscrito extends Livro
{
    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }
}