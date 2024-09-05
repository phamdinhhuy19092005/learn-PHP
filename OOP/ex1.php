<?php

abstract class Animal {
    public $name;
    public $age;
    public $color;
    public $numberOfLegs;
    public $type;

    public function __construct($name, $age, $color, $numberOfLegs, $type)
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
        $this->numberOfLegs = $numberOfLegs;
        $this->type = $type;
    }

    public function eat()
    {
        return 'rice';  
    }

    public function makeSound()
    {

    }
}

/**
 * UnderwaterAnimal -> những động vật dưới nước
 */
interface UnderwaterAnimal {
    public function swim();
    public function diving();
    public function catchFish();
}

// Định nghĩa một đối tượng Dog
class Dog extends Animal {
    public function eat()
    {
        return 'meat';
    }
}

// Định nghĩa một đối tượng Cat
class Cat extends Animal {
    
}

class Duck extends Animal implements UnderwaterAnimal {
    public function swim()
    {
        return 'swim funny';
    }

    public function diving()
    {
        
    }

    public function catchFish()
    {
        
    }
}

// Khởi tạo đối tượng Dog
// $huyDog = new Dog('huypham', 5, 'blue', 4, 'pug');
// $haoDog = new Dog('haopham', 6, 'yello', 4, 'alaska');
// $otherDog = new Dog('abc', 6, 'yello', 4, 'xzy');

// echo $haoDog->eat();

$huyDuck = new Duck('huypham', 5, 'blue', 2, 'ducksky');

echo $huyDuck->swim();

// var_dump($huyDuck);
