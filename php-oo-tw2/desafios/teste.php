<?php

use Carro;

$carro = new Carro();

$class = new ReflectionClass('Carro');

foreach ($class->getProperties() as $property) {
    if ($property->isProtected()) {
        print($property->name . PHP_EOL);
    }
}

$carro->setNome(fgets(STDIN));
$carro->setTipo(fgets(STDIN));

print($carro->getNome() . PHP_EOL);
print($carro->getTipo());