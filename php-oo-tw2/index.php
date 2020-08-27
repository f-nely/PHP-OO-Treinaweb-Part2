<?php

use App\Classes\Cliente;
use App\Classes\Produto;

require_once 'autoload/autoload-psr4.php';


/* require_once 'src/Classes/Produto.php';
require_once 'src/Classes/Cliente.php'; */

$prod1 = new Produto();
$prod1->titulo = "Skol";
$prod1->descricao = "Cerveja Pilsen";
$prod1->preco = 2.50;

$prod2 = new Produto();
$prod2->titulo = "Itaipava";
//$prod2->descricao = "Cerveja Brasileira";
$prod2->preco = 1.90;

var_dump($prod1, $prod2);

$cli = new Cliente("Victor", "xxxxx-xxxx", 2);
$cli->endereco = "São Paulo";
$cli->compra();


//Instanciando objetos dinamicamente

/*$nomeClasse = "Produto";

$instacia = new $nomeClasse;
var_dump($instacia);

$cli2 = new $cli;

$nomeClasse2 = get_class($cli);
$cli3 = new $nomeClasse2;
$cli3->nome = "Howard";

var_dump($cli, $cli2, $cli3);*/



