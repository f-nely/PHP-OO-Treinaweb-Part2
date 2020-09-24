<?php


namespace App\Email\Adaptadores;


class AdaptadorBase
{
    public function processar(): void
    {
        echo "Processado com adaptador base: ";
    }
}