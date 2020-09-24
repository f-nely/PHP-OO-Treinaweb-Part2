<?php


namespace App\desafios;


class Passaro extends Animal
{
    function voar(): void
    {
        print("Estou voando!". PHP_EOL);
    }

    public function cantar(): void
    {
        print("Estou cantando!" . PHP_EOL);
    }
}