<?php

namespace App\Email;

use App\Classes\Cliente;
use App\Email\Adaptadores\AdaptadorBase;
use App\Email\Adaptadores\Mailgun\Adaptador as Mailgun;
use App\Email\Adaptadores\Mailgun\Adaptador as SES;

const VERSION = 1.0;

class Envio
{
    public function envia(AdaptadorBase $adaptador): void
    {
        $adaptador->processar();

    }

    public function m1()
    {
        $adaptador = new Mailgun;
    }

    public function m2()
    {
        $adaptador = new SES;
    }
}

function valida(string $email): void
{
    echo "O endereço $email é valido: ";
}