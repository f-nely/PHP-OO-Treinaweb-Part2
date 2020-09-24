<?php

use App\Desafios\Icaro;
use function App\Desafios\andar;
use function App\Desafios\voar;

require_once 'Animal.php';
require_once 'Passaro.php';
require_once 'Icaro.php';



$icaro = new Icaro;

$icaro->andar();
$icaro->voar();
$icaro->cantar();