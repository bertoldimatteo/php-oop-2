<?php 

require_once __DIR__ . '/creditCard.php';

class User extends creditCard {
    public $name;
    public $surname;
    public $email;
    public $discount;
    public $creditCard;

    public function __construct(string $_name, string $_email, string $_discount, string $_number, string $_expiration)
    {   
        parent::__construct( $_number, $_expiration);

        $this->name = $_name;
        $this->email = $_email;
        $this->discount = $_discount;
    }
}
?>