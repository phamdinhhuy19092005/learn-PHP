<?php

class Car{

    public $color;
    public $brand;
    public $speed;


    public function __construct($color, $brand, $speed )
    {
        $this->color = $color;
        $this->brand = $brand;
        $this->speed = $speed;
    }
}

class ElectricCar extends Car{
    public $batteryLevel;

    public function __construct($color, $brand, $speed, $batteryLevel)
    {
        parent::__construct($color, $brand, $speed);
        $this->batteryLevel = $batteryLevel;
    }

    public function chargeBattery($amount){
        $this->batteryLevel += $amount;

        if($this->batteryLevel > 100){
            $this->batteryLevel = 100;
        }

        echo "Battery charged to " . $this->batteryLevel. "%<br>";
    }
}

$myElectricCar = new ElectricCar("Red", "honda", 10, 80);


print_r($myElectricCar);
$myElectricCar->chargeBattery(30);