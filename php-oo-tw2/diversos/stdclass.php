<?php

$generica = new StdClass;
$generica->nome = "Treinaweb";
$generica->curso = "PHP OO";

var_dump($generica);

$myArray = [
  "nome" => "Treinaweb",
  "curso" => "Symfony"
];

$objeto = (object) $myArray;

var_dump($objeto);