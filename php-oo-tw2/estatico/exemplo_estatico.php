<?php

require_once '../autoload/autoload-psr4.php';

use App\Classes\Vendedor;

var_dump(Vendedor::$bonus);

Vendedor::$bonus = 1.5;

echo Vendedor::comisao(true);

var_dump(Vendedor::$bonus);
