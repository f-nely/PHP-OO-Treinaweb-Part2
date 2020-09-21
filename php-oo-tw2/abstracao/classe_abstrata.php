<?php


require_once '../autoload/autoload-psr4.php';


$cliente = new App\Classes\Cliente();

$cliente->setId(1);
$cliente->setNome("Elton");
$cliente->setIdade(28);
$cliente->setTelefone("11 - 00000-1111");
$cliente->setEndereco("São Paulo");

var_dump($cliente);
