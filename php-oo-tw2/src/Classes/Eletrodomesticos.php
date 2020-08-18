<?php


namespace App\Classes;


class Eletrodomesticos extends Produto
{
    public int $voltagem;

    public function defineVoltagem(int $voltagem): void
    {
        if ($voltagem === 110 || $voltagem === 220) {
            $this->voltagem = $voltagem;
        }
    }

    public function detalhes(): void
    {
        echo "Nome do produto: " . $this->titulo . "<br>";
        echo "Voltagem: " . $this->voltagem;
    }
}