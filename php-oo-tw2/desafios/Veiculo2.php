<?php


class Veiculo2
{
    public array $propriedades = [];

    public function __set(string $nomePropriedade, string $valorPropriedade)
    {
        if ($nomePropriedade === "nome") {
            $this->nome = $valorPropriedade;
        } else {
            $this->$nomePropriedade = $valorPropriedade;
        }
    }
}

$veiculo = new Veiculo2;

$nome = rtrim(fgets(STDIN));
$tipo = rtrim(fgets(STDIN));

$veiculo->nome = $nome;
$veiculo->tipo = $tipo;

var_dump($veiculo);