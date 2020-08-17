<?php

require_once '/home/nelynely/PhpstormProjects/php-oo-tw/src/Classes/Produto.php';

$prod1 = new Produto();
$prod1->titulo = "Skol";
$prod1->descricao = "Cerveja Pilsen";
$prod1->preco = 2.50;

//Apontam para o mesmo objeto
$prod2 = $prod1;
$prod2->preco = 3.40;

 function alteraProduto(Produto $produto)
{
    $produto->titulo = "Skol Litrão";
}

alteraProduto($prod1);

var_dump($prod1, $prod2);






