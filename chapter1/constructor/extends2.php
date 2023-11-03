<?php

require_once 'chapter1/Constructor-Destructor.php';

class userRegistration extends LoginAuth 
{
    public  string $firstName;
    public string $lastName;
    public  function __construct( string $firtName,string $lastName )
    {
        $this->firstName = $firtName;
        $this->lastName = $lastName;
        parent::__construct(string $userName, string $email, string $password, string $repassword);
        
    }

    
}

$userRegistration = new userRegistration()

?>