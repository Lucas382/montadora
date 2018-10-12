<?php

require_once './Motor/Motor10.php';
require_once './Carro.php';
require_once './Motor/Motor10Turbo.php';
require_once './Motor/Motor20.php';

$motor = new Motor10();
$motor2 = new Motor10Turbo();
$motor3 = new Motor20();

$carro = new Carro("Azul",$motor3);

$carro->abastecer(10);
$carro->ligar();


var_dump($motor3);
var_dump($carro);