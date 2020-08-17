<?php

require_once '/home/nelynely/PhpstormProjects/php-oo-tw/src/Classes/Produto.php';

$prod1 = new Produto();
$prod1->titulo = "Skol";
$prod1->descricao = "Cerveja Pilsen";
$prod1->preco = 2.50;

$prod2 = clone $prod1;
$prod2->preco = 3.40;


function alteraProduto(Produto $produto)
{
    $produto->titulo = "Skol Litrão";
    return $produto;
}

$prod3 = alteraProduto(clone $prod1);

var_dump($prod1, $prod2, $prod3);
