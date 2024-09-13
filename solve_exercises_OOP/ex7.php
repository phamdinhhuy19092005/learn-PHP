<?php

interface Movable {
    public function start();
    public function stop();
}

class Car implements Movable {
    public $speed;

    public function __construct($speed) {
        $this->speed = $speed;
    }

    public function start() {
        echo "Xe chay.<br>";
    }

    public function stop() {
        echo "Xe ngừng.<br>";
    }

}

class Bicycle implements Movable {
    public $speed;

    public function __construct($speed) {
        $this->speed = $speed;
    }

    public function start() {
        echo "Xe chay.<br>";
    }

    public function stop() {
        echo "Xe ngừng.<br>";
    }

}


$car = new Car(80); 
$bicycle = new Bicycle(15); 

$car->start();
$car->stop();

$bicycle->start();
$bicycle->stop();
?>
