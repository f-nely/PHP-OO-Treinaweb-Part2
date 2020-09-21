<?php


namespace App\Classes;


abstract class Pessoa
{
    protected int $id;

    private string $nome;

    private string $endereco;

    private int $idade;

    private string $telefone;

    abstract public function setId(int $id): void;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function setEndereco(string $endereco): void
    {
        $this->endereco = $endereco;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): void
    {
        $this->idade = $idade;
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }

    public function setTelefone(string $telefone): void
    {
        $this->telefone = $telefone;
    }



}

php-oo-tw2/src/Classes/Pessoa.php