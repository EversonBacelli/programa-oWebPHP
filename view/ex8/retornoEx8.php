<?php
require '../principal/inicio.html';
require '../principal/nav.html';

     
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];


    $resultado = (($nota1*1) + ($nota2*2)+ ($nota3*3) )  /  6;    

    require '../ex8/card.html';
    require '../principal/fim.html';
?>

