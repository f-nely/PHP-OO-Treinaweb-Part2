<?php

require_once 'Livro.php';
require_once 'Manuscrito.php';


$class = new ReflectionClass('Manuscrito');
print("Implementei: " . $class->getParentClass()->name . PHP_EOL);

$manuscrito = new Manuscrito();
$manuscrito->setTitulo(fgets(STDIN));
print("O título é: " . $manuscrito->getTitulo());