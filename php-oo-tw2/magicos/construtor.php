<?php

require_once '../autoload/autoload-psr4.php';

$cli = new App\Classes\Cliente("Elton", "11 xxxxx-xxxx", 28);
$cli->endereco = "Sp";

$cli->cpf = "123.456.789-10";
$cli->rg = "11.111.111.0";

echo $cli->city;

$cli->altera("Elton Fonseca", 29);

$cli(true);
//unset($cli); destrói o objeto
var_dump($cli);