<?php

require_once 'Carro.php';

$carro1 = new Carro();
$carro2 = new Carro("Vermelho");
$carro3 = new Carro("Verde");

$carro1->abastecer(10);
$carro1->ligar();
$carro1->abastecer(20);
$carro1->acelerar(80);
$carro1->acelerar(80);
$carro1->acelerar(80);
$carro1->frear();

var_dump($carro1);
var_dump($carro2);



