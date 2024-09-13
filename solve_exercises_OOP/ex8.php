<?php

abstract class Animal{
   abstract public function mackSound();
}

interface Pet {
    public function play();
}


class Dog extends Animal implements Pet{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function mackSound()
    {
        return "Gau Gau";
    }

    public function play(){
        echo "Chó chơi mèo";
    }
}

class Cat extends Animal implements Pet{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }  
    public function mackSound()
    {
        return "Meo Meo";
    }

    public function play(){
        echo "Mèo chơi chó";
    }

}

$myDog = new Dog("Mực", 3);
$myCat = new Cat("Mun", 3);

$myDog->mackSound();
$myCat->mackSound();

$myDog->play();
$myCat->play();
