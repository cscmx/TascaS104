<?php

require_once 'classShape.php';

class Triangle extends Shape 
{
    public function calculateArea(): float {
        return ($this->height * $this->width)/2;
    }
}


?>
