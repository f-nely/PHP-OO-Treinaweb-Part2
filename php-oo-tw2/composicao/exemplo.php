<?php

require_once '../autoload/autoload-psr4.php';

$cliente = new App\Classes\Cliente();

$cliente->setId(1);
$cliente->setNome('James');
$cliente->setIdade(21);
$cliente->setTelefone('21 99999-9999');
$cliente->setEndereco('Rio de Janeiro');

$produto = new App\Classes\Produto('Cerveja');
$produto->defineCodigoBarras('001');
$produto->definePreco(5.20);

$pedido = new App\Classes\Pedido($cliente, $produto);

$pedido->getProduto()->detalhes();

var_dump($pedido);