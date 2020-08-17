<?php

namespace App\Classes;
class Fornecedor
{
    public const PAIS = "Brasil";

    public string $razaoSocial;

    public string $nomeFantasia;

    public string $cnpj;

    public function autoriza(object $usuario): void
    {
        if ($usuario->nome == "James" && $usuario->senha == "525") {
            throw new \TypeError();
            echo "Usuário {$usuario->name} autorizado";
        } else {
            echo "Acesso não permitido";
        }
    }
}