<?php

namespace App\Classes;
class Produto
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

    public function acessaCodigoBarras(): string
    {
        return $this->codigoBarras;
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
    }
}