<?php

require_once '/home/nelynely/PhpstormProjects/php-oo-tw/src/Classes/Produto.php';

$prod1 = new Produto();
$prod1->titulo = "Skol";
$prod1->descricao = "Cerveja Pilsen";
$prod1->preco = 2.50;
$prod1->desconto = 0.1; //Propriedade em tempo de execução

$prod1->defineCodigoBarras("90000");
echo $prod1->acessaCodigoBarras();


var_dump($prod1);
