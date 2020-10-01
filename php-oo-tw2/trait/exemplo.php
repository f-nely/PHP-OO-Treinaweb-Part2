<?php

require_once '../autoload/autoload-psr4.php';

$cliente = new App\Classes\Cliente();

$cliente->setId(1);
$cliente->setNome('James');
$cliente->setIdade(21);
$cliente->setTelefone('21 99999-9999');
$cliente->setEndereco('Rio de Janeiro');

$cliente->detalhes2();