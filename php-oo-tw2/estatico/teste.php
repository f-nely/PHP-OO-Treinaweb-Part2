<?php

require_once '../autoload/autoload-psr4.php';

use App\Classes\Vendedor;
use App\Classes\Representante;

echo Representante::comissao(false);