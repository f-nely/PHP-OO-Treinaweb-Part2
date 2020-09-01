<?php


namespace App\Classes;


class Microondas extends Eletrodomesticos
{
    public int $potencia;

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