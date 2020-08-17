<?php

require_once '/home/nelynely/PhpstormProjects/php-oo-tw/src/Classes/Produto.php';

$prod1 = new Produto();
$prod1->titulo = "Skol";
$prod1->descricao = "Cerveja Pilsen";
$prod1->preco = 2.50;

$prod2 = new Produto();
$prod2->titulo = "Skol";
$prod2->descricao = "Cerveja Pilsen";
$prod2->preco = 2.50;

//Mesmo tipo, e propriedade iguais
var_dump($prod1 == $prod2);

$prod3 = new Produto();
$prod3->titulo = "Skol Litrão";
$prod3->descricao = "Cerveja Pilsen";
$prod3->preco = 2.50;

//Se referencia aponta para o mesmo objeto
var_dump($prod1 === $prod3);

$prod4 = $prod1;

//Mesmo tipo, propriedade iguais, e referencia aponta para o mesmo objeto
var_dump($prod4 === $prod1);
