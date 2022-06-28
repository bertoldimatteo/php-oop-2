<?php

require_once __DIR__ . '/product.php';

class Toy extends Product {
    public $type;
    public $size;

    public function __construct(string $_name, string $_price, string $_animalType, string $_type, string $_size)
    {
        parent::__construct($_name, $_price, $_animalType);

        $this->type = $_type;
        $this->size = $_size;
    }
}

?>