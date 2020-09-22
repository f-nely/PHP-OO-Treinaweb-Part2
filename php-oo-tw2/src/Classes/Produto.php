<?php

namespace App\Classes;

use App\Interfaces\Imprimivel;

class Produto implements Imprimivel
{
    private string $titulo;

    public string $descricao = "Produtos em geral";

    protected float $preco;

    private string $codigoBarras;

    public function __construct(string $titulo)
    {
        $this->titulo = $titulo;
    }

    public function defineTitulo(string $titulo): string
    {
        $this->titulo = $titulo;
    }

    final public function defineCodigoBarras(string $codigo): void
    {
        $this->codigoBarras = $codigo; //Propriedade em tempo de execução
    }

    public function acessaCodigoBarras(): void
    {
        echo "<br>Codigo de barras do produto: " . $this->codigoBarras;
    }

    public function definePreco(float $preco): void
    {
        if ($preco > 0) {
            $this->preco = $preco;
        }
        return;
    }

    public function detalhes(): void
    {
        echo "<br>Nome do produto: " . $this->titulo . "<br>";
        echo "<br>Preço do produto: " . $this->preco . "<br>";
        echo "<br>Descrição do produto: " . $this->descricao . "<br>";
        $this->acessaCodigoBarras();
    }
}