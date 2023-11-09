<?php

class loginDetails {

}
class Users Extends loginDetails
{

}


//declare interface 1 for the compatibility
interface User1
{
    public function UserDetails1(loginDetails $arg):loginDetails;
    
}

//declare interface 2 for the compatibility

interface User2 {
    public function UserDetails1(Users $arg): Users;
}


class MyCredentials implements User1,User2
{
    public function UserDetails1(loginDetails $arg): Users
    {
        return new Users();
    }

}
?>