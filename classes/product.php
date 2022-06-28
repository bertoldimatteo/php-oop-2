<?php

class Product {
    protected $name;
    protected $price;
    protected $quantity;
    protected $animalType;

    public function __construct(string $_name, int $_price, string $_animalType)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->animalType = $_animalType;
    }
}
?>