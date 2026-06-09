<?php
/*
Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea amb un mètode.
*/

require_once 'classShape.php';
require_once 'classTriangle.php';
require_once 'classRectangle.php';
 
 $myTriangle = new Triangle(10,5);
 $myRectangle = new Rectangle (5, 8);

 echo "Area triangulo: ".$myTriangle->calculateArea().PHP_EOL;
 echo "Area rectángulo: ".$myRectangle->calculateArea().PHP_EOL;

 ?>