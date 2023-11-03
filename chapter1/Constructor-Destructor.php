<?php

class LoginAuth
{
    public $userName ;
    public $email ;
    public $password;
    public $repassword ;

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










/* CONSTRUCTOR */



?>