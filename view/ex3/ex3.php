<?php 
require '../principal/inicio.html';
require '../principal/nav.html';

$numeroDePaesVendidas = $_POST['NumeroDePaes'];
$valorUnitarioPao = 0.12;

$numeroDeBroaVendidas = $_POST['NumeroDeBroas'];
$valorUnitarioBroa = 1.5;

$totalVendido = ($numeroDePaesVendidas * $valorUnitarioPao) + 
($valorUnitarioBroa * $numeroDePaesVendidas);


require './card.html';
require '../principal/fim.html';

?>