<?php



class Empleado 
{
    private string $name;
    private float $salary;
    private const MINIMUMSALARY = 6000;
    

    public function __construct(string $name, int $salary){
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName(): string { 
        return $this->name;
    }
    public function getSalary(): float {
        return $this->salary;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }
    public function setSalary(float $salary): void {
        $this->salary = $salary;
    }

    //métodos propios

    public function payTaxes(): bool {
                
        return ($this->salary > self::MINIMUMSALARY);

    }
}

?>