<?php

class Address_details {
    public $address;
    public $city;
    public $state;
    public $zipcode;
    public $country;
    
    public function __construct(string $address, string $city, string $state, int $zipcode, string $country)
    {
        $this->address = $address;
        $this->city = $city;
        $this->state = $zipcode;
        $this->country = $country;
    }
}

class User extends Address_details {
    public $name;
    public $lastname;
    public $user_name;
    public $email_address;
    public $password;
    
    public function __construct(string $name, string $lastname, string $user_name, string $email_address, string $password)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->user_name = $user_name;
        $this->email_address = $email_address;
        $this->password = $password;
    }
}

