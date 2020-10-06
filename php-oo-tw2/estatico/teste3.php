<?php

require_once '../autoload/autoload-psr4.php';

use App\Classes\Vendedor;

$vendendor = new Vendedor();
$vendendor->addVenda(100_000);
$vendendor->addVenda(100_000);
echo $vendendor->minhaComissao();