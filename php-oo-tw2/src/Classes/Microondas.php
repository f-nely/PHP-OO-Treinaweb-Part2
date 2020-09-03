<?php


namespace App\Classes;


class Microondas extends Eletrodomesticos
{
    public int $potencia;

    public string $descricao = "Microondas em geral";

    public function __construct(string $titulo, int $voltagem, $potencia)
    {
        parent::__construct($titulo, $voltagem);
        $this->definePotencia($potencia);
    }

    public function definePotencia(int $pontencia): void
    {
        $this->potencia = $pontencia;
    }

    public function detalhes(): void
    {
        parent::detalhes();
        echo "<br> Potencia: " . $this->potencia . "<br>";
    }
}