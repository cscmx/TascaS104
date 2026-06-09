<?php
/*
Crea una classe que representi un empleat, amb atributs referits al seu nom i sou. Defineix un mètode que rebi com a paràmetres el nom i el sou. Planteja un segon mètode que imprimeixi el nom i un missatge que mostri si ha de pagar o no impostos (si el sou en supera 6000, paga impostos).
*/

require_once 'classEmpleado.php';

$empleado = new Empleado("Pedro", 4000);

$hacienda = ($empleado->payTaxes()) ?  " tiene que pagar impuestos" : " no tiene que pagar impuestos";

echo $empleado->getName().$hacienda;


?>