<?php



require_once '../autoload/autoload-psr4.php';

$prod = new App\Classes\Produto();

$prod->titulo = "Cerveja";
$prod->preco = 3.00;
$prod->defineCodigoBarras("00011");

$prod->detalhes();

echo "<br>";

$geladeira = new App\Classes\Eletrodomesticos();

$geladeira->titulo = "Geladeira";
$geladeira->preco = 3000.00;
$geladeira->defineCodigoBarras("00099");
$geladeira->defineVoltagem(220);

$geladeira->detalhes();

echo "<br>";


$microondas = new App\Classes\Microondas();

$microondas->titulo = "Microondas";
$microondas->preco = 200.00;
$microondas->defineCodigoBarras("0x0120");
$microondas->defineVoltagem(220);
$microondas->definePotencia(700);

$microondas->detalhes();

