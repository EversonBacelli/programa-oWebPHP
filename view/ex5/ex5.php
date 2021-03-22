<?php 
require '../principal/inicio.html';
require '../principal/nav.html';

$litroGasolina = 5.50;
$numeroLitros = 10;


$valorApagar = $litroGasolina * $numeroLitros;

require './card.html';
require '../principal/fim.html';

?>