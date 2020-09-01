<?php

namespace App\Classes;
class Produto
{
    public string $titulo;

    public string $descricao = "Cerveja Brasileira";

    public float $preco;

    public function defineCodigoBarras(string $codigo): void
    {
        $this->codigoBarras = $codigo; //Propriedade em tempo de execução
    }

    public function acessaCodigoBarras(): string
    {
        return $this->codigoBarras;
    }

    public function detalhes(): void
    {
        echo "<br>Nome do produto: " . $this->titulo . "<br>";
    }
}