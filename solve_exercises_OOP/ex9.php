<?php

interface Flyable {
   public function fly();
}

interface Swimmable {
    public function swim();
}

class Bird implements Flyable {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function fly() {
        echo $this->name . "Bay";
    }
}

class Fish implements Swimmable {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function swim() {
        echo $this->name . "Bơi";
    }
}

class Duck implements Swimmable, Flyable {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function swim() {
        echo $this->name . "Bơi";
    }

    public function fly() {
        echo $this->name . "Bay";
    }
}

$bird = new Bird("Tu hú");
$bird->fly(); 

$fish = new Fish("Cá chim");
$fish->swim();

$duck = new Duck("Vịt");
$duck->fly();
$duck->swim(); 
