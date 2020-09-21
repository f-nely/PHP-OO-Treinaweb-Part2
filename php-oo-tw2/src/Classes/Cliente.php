<?php

namespace App\Classes;
class Cliente extends Pessoa
{
    public function setId(int $id): void
    {
        $this->id = $id + 1000;
    }

    public function __set(string $nomePropriedade, string $valorPropriedade)
    {
        if ($nomePropriedade === "cpf") {
            $this->cpf = \str_replace(".", "", $valorPropriedade);
        } else {
            $this->$nomePropriedade = $valorPropriedade;
        }
    }

    public function __get(string $nomePropriedade): string
    {
        return "Propriedade não existe: ";
    }

    public function __call(string $nomeMetodo, array $argumentosMetodos): void
    {
        if ($nomeMetodo === "altera") {
            $this->nome = $argumentosMetodos[0];
            $this->idade = $argumentosMetodos[1];
        }
    }

    public function __invoke(bool $status): void
    {
        $this->status = $status;
    }

    public function __sleep(): array
    {
        return ["nome" , "idade"];
    }

    public function __wakeup(): void
    {
        $this->tipo = "serializado";
    }

    public function __toString(): string
    {
        return $this->nome . "," . $this->idade;
    }

    public function compra(): void
    {
        echo "O cliente {$this->nome} realizou uma compra: ";
    }

    public function defineNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function __destruct()
    {
        echo "O obj foi destruido: ";
    }
}