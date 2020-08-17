<?php

require_once '../autoload/autoload-psr4.php';

$cli = new App\Classes\Cliente("Elton", "11 xxxxx-xxxx", 28);
$cli->endereco = "Sp";

//unset($cli); destrói o objeto
var_dump($cli);