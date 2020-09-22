<?php

require_once '../autoload/autoload-psr4.php';

use App\Interfaces\Imprimivel;

$produto = new App\Classes\Produto("Beer");
$produto->defineCodigoBarras("00022");
$produto->definePreco(10);

echo $produto->retornaDetalhes();