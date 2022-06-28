<?php

class Product {
    public $name;
    public $price;
    public $quantity;
    public $animalType;

    public function __construct(string $_name, string $_price, string $_animalType)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->animalType = $_animalType;
    }
}
?>