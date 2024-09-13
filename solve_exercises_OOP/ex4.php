<?php

abstract class Animal{
    public $name;
    public $species;

    public function __construct($name, $species)
    {
        $this->name = $name;
        $this->species = $species;
    }

    public function makeSound($sound){
        return $sound;
    }
}

class Dog extends Animal{

}
class Cat extends Animal{

}

$myDog = new Dog("Chó cuồng bạo", "Chó");
print_r($myDog);
echo $myDog->makeSound("Gau Gau ");

echo "<br>";

$myCat = new Cat("Mèo hoang hư hỏng", "Mèo");
print_r($myCat);
echo $myDog->makeSound("Meo Meo ");