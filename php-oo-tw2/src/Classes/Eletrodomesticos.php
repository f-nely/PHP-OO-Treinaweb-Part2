<?php


namespace App\Classes;


class Eletrodomesticos extends Produto
{
    public int $voltagem;

    public string $descricao = "Eletrodomestico em geral";

    public function __construct(string $titulo, int $voltagem)
    {
        //$this->titulo = $titulo;
        parent::__construct($titulo);
        $this->defineVoltagem($voltagem);
    }

    public function defineVoltagem(int $voltagem): void
    {
        if ($voltagem === 110 || $voltagem === 220) {
            $this->voltagem = $voltagem;
        }
    }

    public function detalhes(): void
    {
        parent::detalhes();
        echo "<br> Voltagem: " . $this->voltagem . "<br>";
    }
}