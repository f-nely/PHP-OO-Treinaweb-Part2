<?php

use App\Classes\Eletrodomesticos;

require_once '../autoload/autoload-psr4.php';

$obj = new Eletrodomesticos();

$obj->titulo = "Geladeira";
$obj->preco = 2200;
$obj->defineCodigoBarras("00011");
$obj->defineVoltagem(110);
var_dump($obj);
