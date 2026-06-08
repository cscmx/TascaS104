<?php
/*
Crea una classe que representi un empleat, amb atributs referits al seu nom i sou. Defineix un mètode que rebi com a paràmetres el nom i el sou. Planteja un segon mètode que imprimeixi el nom i un missatge que mostri si ha de pagar o no impostos (si el sou en supera 6000, paga impostos).
*/

class Empleado 
{
    public string $name;
    public int $salary;
    
    public function __construct(string $name, int $salary){
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName(){
        return $this->name;
    }
    public function getSalary(){
        return $this->salary;
    }

    public function setName(string $name){
        $this->name = $name;
    }
    public function setSalary(int $salary){
        $this->salary = $salary;
    }

    //métodos propios

    public function payTaxes() {
        echo $this->name;
        if ($this->salary > 6000){
            echo " tiene que pagar impuestos";
        } else {
            echo " no tiene que pagar impuestos";
        }
    }
}

$empleado = new Empleado("Pedro", 45000);

$empleado->payTaxes();

?>