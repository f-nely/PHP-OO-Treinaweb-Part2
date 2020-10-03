<?php


namespace App\Classes;


class Vendedor
{
    static public float $bonus = 1.2;
    static public float $comissao = 2.5;

    static public function comissao(bool $temBonus): float
    {
        if ($temBonus) {
            return self::$comissao * self::$bonus;
        }

        return self::$comissao;
    }
}