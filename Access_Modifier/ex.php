<?php

interface HouseMoveable {
    public function move();
}

abstract class Place {
    public $color;
    protected $width;
    protected $height;
    private $address;

    public function setAddress($address)
    {
        $this->address = $address;
    }
}

class House extends Place implements HouseMoveable {
    public function setWidth($width) {
        $this->width = $width;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function setAddress($address)
    {
        parent::setAddress($address);
    }

    public function move()
    {

    }
}

$house1 = new House();

$house1->color = 'yellow';
$house1->setWidth(1000);
$house1->setHeight(2000);
$house1->setAddress('123tktq');

print_r($house1);
