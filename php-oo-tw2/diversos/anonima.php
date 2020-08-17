<?php

require_once '/home/nelynely/PhpstormProjects/php-oo-tw/src/Classes/Fornecedor.php';

$fornecedor = new Fornecedor();

try {
    $fornecedor->autoriza(new class {
        public $nome = "James";
        public $senha = "525";
    });
} catch (TypeError $error) {
    echo $error->getMessage();
    echo $error->getLine();
}

