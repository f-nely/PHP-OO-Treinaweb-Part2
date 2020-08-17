<?php

declare(strict_types=1);

require_once '../src/Classes/Fornecedor.php';

$fornecedor = new Fornecedor();

$fornecedor->cnpj = "08.143.077/0001-22";
$fornecedor->nomeFantasia = "Brothers ";
$fornecedor->razaoSocial = "Bento e Pietro Doces & Salgados Ltda";

try {
    $fornecedor->autoriza(new class {
        public $nome = "James";
        public $senha = "525";
    });
} catch (TypeError $error) {
    echo "Propriedade precisa ser um objeto:";
}






var_dump($fornecedor);

