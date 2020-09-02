<?php

require_once '../autoload/autoload-psr4.php';

$prod = new App\Classes\Produto("Cerveja");
$prod->detalhes();
echo "<br>";

$geladeira = new App\Classes\Eletrodomesticos("Geladeira", 220);
$geladeira->detalhes();
echo "<br>";

$microondas = new App\Classes\Microondas("Microondas", 110, 4000);
$microondas->detalhes();