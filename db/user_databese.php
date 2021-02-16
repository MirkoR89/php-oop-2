<?php

class AddressDetails {
    public $address;
    public $city;
    public $state;
    public $zipcode;
    public $country;
    
    public function __construct(string $address, string $city, string $state, int $zipcode, string $country)
    {
        $this->address = $address;
        $this->city = $city;
        $this->state = $state;
        $this->zipcode = $zipcode;
        $this->country = $country;
    }
}

class User extends AddressDetails {
    public $name;
    public $lastname;
    public $age;
    public $user_name;
    public $email_address;
    public $password;
    
    public function __construct(string $name, string $lastname, int $age, string $user_name, string $email_address, string $password, string $address, string $city, string $state, int $zipcode, string $country)
    {
        parent::__construct($address, $city, $state, $zipcode, $country);
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
    new User('Paolo', 'Bianchi', 29, 'bianchiPaul', 'paulB@live.com', 'admin23', 'via Milano 2', 'Cinisello Balsamo', 'Lombordia', 20092, 'Italy'),
    new User('Elisa', 'Casablanca', 22, 'ElisaBlanca29', 'blanca@libero.it', 'eli81cuore', 'viale Zara 122', 'Milano', 'Lombardia', 20100, 'Italy'),
    new User('Federica', 'Sassuolo', 43, 'fedesass', 'sassuolo.F@gmail.com', '123FedeSass', 'via Enrico Fermi 18', 'Firenze', 'Toscana', 50100, 'Italy'),  
    new User('Andrea', 'Biagio', 51, 'abiagio51', 'a_biagio@live.com', 'ytrewq00', 'via Per Duomo 23', 'Brindisi', 'Puglia', 72100, 'Italy'),
    new User ('Giovanni', 'Rossi', 32, 'giocannino.rossi88', 'giova@gmail.com', 'qwerty89', 'via Roma 6', 'Roma', 'Lazio', 72103, 'Italy')
]; 
