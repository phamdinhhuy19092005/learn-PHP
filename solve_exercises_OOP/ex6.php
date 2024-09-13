<?php

abstract class Shape{
    abstract public function calulateArea();
}

class Circle extends Shape {
    public $dientich;

    public function __construct($dientich)
    {
        $this->dientich = $dientich;
    }

    public function calulateArea(){
        return pi() * pow($this->dientich, 2);
    }
}

$myCircle = new Circle(5);
echo "dien tich hinh tron: ". $myCircle->calulateArea();
