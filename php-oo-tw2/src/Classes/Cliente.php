<?php

namespace App\Classes;
class Cliente
{
    public string $nome;

    public string $idade;

    public string $endereco;

    public string $telefone;

    public function compra(): void
    {
        echo "O cliente {$this->nome} realizou uma compra: ";
    }

    public function defineNome(string $nome): void
    {
        $this->nome = $nome;
    }
}