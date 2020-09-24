<?php


namespace App\Email\Adaptadores;


class AdaptadorBase implements AdaptadorInterface
{
    public function processar(): void
    {
        echo "Processado com adaptador base: ";
    }
}