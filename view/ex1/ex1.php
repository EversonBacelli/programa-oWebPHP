<?php 
require '../principal/inicio.html';
require '../principal/nav.html';

$largura = $_POST['Largura'];
$comprimento = $_POST['Comprimento'];
$area = calcularArea($largura, $comprimento);

require './card.html';
require '../principal/fim.html';

function calcularArea($largura, $comprimento){
    $area = $largura * $comprimento;
    return $area;
}
?>


