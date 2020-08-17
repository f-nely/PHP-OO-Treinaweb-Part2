<?php


require_once '/home/nelynely/PhpstormProjects/php-oo-tw/src/Classes/Produto.php';

$prod1 = new Produto();
$prod1->titulo = "Skol";
$prod1->descricao = "Cerveja Pilsen";
$prod1->preco = 2.50;

//iterando sobre objetos
foreach ($prod1 as $nome => $value) {
    echo "$nome: $value <br/>";
}