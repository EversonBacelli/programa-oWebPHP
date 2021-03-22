<?php 
require '../principal/inicio.html';
require '../principal/nav.html';

$kiloRefeicao = 12;
$consumo = $_POST['PesoComida'];
$pesoPrato = 0.2;
$consumo = $consumo - $pesoPrato;

$total = ($kiloRefeicao * $consumo);

require './card.html';
require '../principal/fim.html';

?>