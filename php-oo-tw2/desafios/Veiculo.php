<?php

class Veiculo
{
    public string $nome;
    public string $tipo;

    public function __construct(string $tipo)
    {
        $this->tipo = $tipo;
    }
}

$nome = rtrim(fgets(STDIN));
$tipo = rtrim(fgets(STDIN));

$veiculo = new Veiculo($tipo);

$veiculo->nome = $nome;

echo $veiculo->nome . PHP_EOL;
echo $veiculo->tipo;