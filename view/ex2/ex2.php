<?php 
require '../principal/inicio.html';
require '../principal/nav.html';



$numeroDeCavalos = $_POST['NumeroDeCavalos'];
$numeroFerraduras = $numeroDeCavalos * 4;

require './card.html';
require '../principal/fim.html';

?>