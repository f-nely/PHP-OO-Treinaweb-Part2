<?php

require_once '../autoload/autoload-psr4.php';

use App\Classes\Vendedor;
use App\Classes\Representante;

echo Vendedor::calculaComissa(true, 100_000);
echo '<br>';
echo Representante::calculaComissa(true, 100_000);