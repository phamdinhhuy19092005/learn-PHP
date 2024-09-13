<?php

class Car{
    public $brand;
    public $color;

    public function __construct($brand, $color)
    {
        $this -> brand = $brand;
        $this -> color = $color;
    }

    public function getCarInfo(){
        return $this->brand . " màu " . $this->color;
       
    }
}

class Person{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function driveCar($car){
        echo $this->name ." ". $this->age ." tuổi " . "đang chạy 1 chiếc ". $car->getCarInfo();
    }
}

$myCar = new Car("Wave", "đen");

$myPerson = new Person("Huy", 18);
$myPerson->driveCar($myCar);
