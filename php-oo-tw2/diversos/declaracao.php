<?php

require_once '../src/Email/Envio.php';
require_once '../src/SMS/Envio.php';

use App\Email\Envio as Email;
use App\Email\Envio as SMS;
use const App\Email\VERSION;
use function App\Email\valida;

$email = new Email();
$sms = new SMS();

var_dump($email, $sms);

echo VERSION . '<br/>';

App\Email\valida('nely.nf54@gmail.com');
