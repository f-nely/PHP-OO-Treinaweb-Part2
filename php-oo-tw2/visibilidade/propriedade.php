<?php

require_once '../autoload/autoload-psr4.php';

$prod = new App\Classes\Produto("Cerveja");
//$prod->detalhes();

$geladeira = new \App\Classes\Eletrodomesticos("geladeira", 110);
$geladeira->definePreco(1400);
$geladeira->descricao = "Modelo x2000";
$geladeira->detalhes();