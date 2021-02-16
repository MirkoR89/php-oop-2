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
    public $age;
    public $user_name;
    public $email_address;
    public $password;
    
    public function __construct(string $name, string $lastname, int $age, string $user_name, string $email_address, string $password)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->user_name = $user_name;
        $this->email_address = $email_address;
        $this->password = $password;
    }
}

$user_list = 
[
    new User('Giovanni', 'Rossi', 31, 'giovannino.rossi89', 'giova@gmail.com', 'qwerty89'),
    new User('Paolo', 'Bianchi', 29, 'bianchiPaul', 'paulB@live.com', 'admin23'),
    new User('Elisa', 'Casablanca', 22, 'ElisaBlanca29', 'blanca@libero.it', 'eli81cuore'),  
    new User('Federica', 'Sassuolo', 43, 'fedesass', 'sassuolo.F@gmail.com', '123FedeSass'),  
    new User('Andrea', 'Biagio', 51, 'abiagio51', 'a_biagio@live.com', 'ytrewq00')
]; 

