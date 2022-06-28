<?php 

class User {
    public $name;
    public $surname;
    public $email;
    public $discount;
    public $creditCard;

    public function __construct(string $_name, string $_email, string $_discount)
    {
        $this->name = $_name;
        $this->email = $_email;
        $this->discount = $_discount;
    }
}
?>