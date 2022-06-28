<?php 

class CreditCard {
    public $number;
    public $name;
    public $surname;
    public $expiration;

    public function __construct(string $_number, string $_expiration)
    {
        $this->number = $_number;
        $this->expiration = $_expiration;

        if ($_expiration > 2022) {
            throw new Exception('Card expired');
        }
    }
}
?>