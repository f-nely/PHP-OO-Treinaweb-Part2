<?php

use App\Classes\Eletrodomesticos;
use App\Classes\Microondas;

require_once '../autoload/autoload-psr4.php';

$obj = new Eletrodomesticos();

$obj->titulo = "Geladeira";
$obj->preco = 2200;
$obj->defineCodigoBarras("00011");
$obj->defineVoltagem(110);
//$obj->detalhes();

$obj2 = new Microondas();
$obj2->titulo = "Microondas";
$obj2->preco = 400;
$obj2->defineCodigoBarras("00022");
$obj2->defineVoltagem(220);
$obj2->definePotencia(620);
$obj2->mostra();


var_dump($obj, $obj2);
