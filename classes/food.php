<?php

require_once __DIR__ . '/product.php';

class Food extends Product {
    public $type;
    public $expireDate;

    public function __construct(string $_name, int $_price, string $_animalType, string $_type, string $_expireDate)
    {
        parent::__construct($_name, $_price, $_animalType);

        $this->type = $_type;
        $this->expireDate = $_expireDate;
    }
}

?>