<?php



abstract class Livro
{
    protected string $titulo;

    abstract public function setTitulo(string $titulo): void;

    public function getTitulo(): string{
        return $this->titulo;
    }
}