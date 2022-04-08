<?php

$edad=32; //variable
echo $edad."<br/>";
$edad=40; //cambiar valor de la variable
echo $edad."<br/>";

//Declaracion y uso de constante
define("NOMBRE","Andres"); //esta constante no se puede cambiar el valor
define("APELLIDO","Pineda");
//imprimir constante
echo NOMBRE."<br/>", APELLIDO;
?>