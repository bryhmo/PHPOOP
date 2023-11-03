<?php

class LoginAuth
{
    public string $userName ;
    public string $email ;
    public string $password;
    public string $repassword ;

    function __construct(string $UserName, string $email, string $password, string $repassword)
    {
        $this->userName = $UserName;
        $this->email = $email;
        $this->password = $password;
        $this->repassword = $repassword;

    }

    function setUserName($user_Name)
    {
        $this->userName;
    }

    function setEmail($user_email)
    {
        $this->email;
    }

    function setPassword($user_Password)
    {
        $this->password;
    }

    function setRepassword($user_rePassword)
    {
        $this->repassword;
    }


    public function getUserName($userName)
    {
        return $this->userName;
    }



    public function getEmail($userName)
    {
        return $this->email;
    }


    public function getPassword($userName)
    {
        return $this->password;
    }



    public function getRePassword($userName)
    {
        return $this->repassword;
    }




}

$newLoginDetails = new LoginAuth('ibrahim','ibrahim@gmail.com','asdf:lkj','asdf:lkj');
var_dump($newLoginDetails->userName);
var_dump($newLoginDetails->email);
var_dump($newLoginDetails->password);
var_dump($newLoginDetails->repassword);


// this is the second way of instantiating a class 
$UserLoginDetails = 'LoginAuth';
$myUser = new $UserLoginDetails;





class userRegistration extends LoginAuth 
{
    public  string $firstName;
    public string $lastName;


    public  function __construct( string $firtName,string $lastName ,string $userName, string $email, string $password, string $repassword)
    {
        parent::__construct($userName, $email, $password, $repassword);
        $this->firstName = $firtName;
        $this->lastName = $lastName;
        
        
    }

    
}

$userRegistration = new userRegistration('aamen','mr','bryhmo','brimo@gmail.com','1234','111');





/* CONSTRUCTOR */



?>