<?php


namespace App\Classes;


class Vendedor
{
    static public float $bonus;

    static public function comisao(): float
    {
        return 2.5;
    }
}