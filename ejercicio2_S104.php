<?php
/*
Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea amb un mètode.
*/
class Shape 
{
    public int $alto;
    public int $ancho;

    public function __construct(int $alto, int $ancho){
        $this->alto = $alto;
        $this->ancho = $ancho;
    }
    public function getAlto (){
        return $this->alto;
    }
    public function getAncho (){
        return $this->ancho;
    }
    public function setAlto(int $alto){
        $this->alto = $alto;
    }
    public function setAncho(int $ancho){
        $this->ancho = $ancho;
    }

}

class Triangle extends Shape 
{
    public function calcularArea(){
        return ($this->alto * $this->ancho)/2;
    }
}

 class Rectangle extends Shape 
 {
    public function calcularArea() {
        return $this->alto * $this->ancho;
    }
 }

 
 $myTriangle = new Triangle(10,5);
 $myRectangle = new Rectangle (5, 8);

 echo "Area triangulo: ".$myTriangle->calcularArea().PHP_EOL;
 echo "Area rectángulo: ".$myRectangle->calcularArea().PHP_EOL;