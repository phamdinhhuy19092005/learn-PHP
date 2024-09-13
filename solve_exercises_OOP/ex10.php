<?php

abstract class Vehicle
{
    protected $name;
    protected $maxSpeed;

    public function __construct($name, $maxSpeed) {
        $this->name = $name;
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function move();
}

interface Electric
{
    public function charge();
}

class Car extends Vehicle implements Electric
{
    public function move()
    {
        return "OK";
    }

    public function charge(){
        return "OK";
    }
}

class Bicycle extends Vehicle {

    public function move(){
        return "OK 1";
    }
}

class Motorcycle extends Vehicle {
    
    public function move(){
        return "OK 2";
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

    public function drive(Vehicle $vehicle){
        return $vehicle;
    }
}

$z1000 = new Car('z1000', 1000);

$huypham = new Person('Pham Dinh Huy', 20);

$huypham->drive($z1000);

class VehicleManager{
    public $listVehicle = [];

    public function addVehicle(Vehicle $vehicle){
        $this->listVehicle[] = $vehicle;
    }

    public function showAllVehicles(){
        return $this->listVehicle;
    }
}
