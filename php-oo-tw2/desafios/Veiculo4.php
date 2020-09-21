<?php


namespace Desafio;


class Veiculo4
{
    private $tipo;

    public function setTipo(string $tipo): void
    {
        $this->tipo = $tipo;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }
}