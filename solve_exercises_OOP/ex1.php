<?php

class Car{

    public $color;
    public $brand;
    public $speed;


    public function __construct($color, $brand, $speed )
    {
        $this -> color = $color;
        $this -> brand = $brand;
        $this -> speed = $speed;
    }
}

$myCar = new Car("Red", "Honda", 10);

print_r($myCar);