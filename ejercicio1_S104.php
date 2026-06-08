<?php

class Empleado 
{
    //se declara el constructor directamente
    public function __construct(
        private string $name,
        private int $salary
    ) {}

    //métodos para obtener las propiedades (getter & setter)
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

$empleado = new Empleado("Pedro", 5000);

$empleado->payTaxes();

?>