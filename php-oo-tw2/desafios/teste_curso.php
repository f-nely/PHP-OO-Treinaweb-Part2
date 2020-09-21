<?php

require_once 'Curso.php';

$class = new ReflectionClass('Curso');

foreach ($class->getProperties() as $property) {
    if ($property->isPublic() || $property->isProtected()) {
        print($property->name . PHP_EOL);
    }
}

$curso = new Curso();
$curso->setNome(fgets(STDIN));
$curso->setDescricao(fgets(STDIN));

print($curso->getNome() . PHP_EOL);
print($curso->getDescricao());