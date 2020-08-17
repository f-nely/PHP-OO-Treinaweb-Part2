<?php

require_once '/home/nelynely/PhpstormProjects/php-oo-tw/src/Classes/Cliente.php';

$cli = new Cliente();
$cli->defineNome("Harris");
$cli->idade = 40;
$cli->endereco = "São Paulo";
$cli->telefone = "(11) - xxxxx-xxxx";

var_dump($cli);