<?php

require_once '../autoload/autoload-psr4.php';

$prod = new App\Classes\Produto("Cerveja");
$prod->detalhes();
