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

    public function changeColor($color) {
        $this->color = $color;

        return $this;
    }

    public function changeBrand($brand)
    {
        $this->brand = $brand;
    }

    public function accelerate($speed)
    {   
        $this->speed = $speed;
    }

    public function brake() {
        $this->speed = 0;
    }
}

$myCar = new Car("Red", "Honda", 10);

$myCar->changeColor('yellow');
$myCar->accelerate(20);
$myCar->accelerate(30);
$myCar->accelerate(20);
$myCar->accelerate(10);
$myCar->brake();

/**
 * mycart {
 *  color: red
 *  branch: ....
 * }
 * 
 * mycart->color = 'yellow'
 * mycart->color = 'blue'
 */

print_r($myCar);
