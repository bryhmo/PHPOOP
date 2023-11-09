<?php

interface Users_one
{
    public function logindetails();
}

interface Users_two
{
    public function UserLoginDtails();
}

interface Login_User extends Users_one,Users_two
{
    public function isVerify();
}


class GetVerifyUsers implements Login_User
{
    public function UserLoginDtails()
    {
        
    }

    public function logindetails()
    {
        
    }
    public function isVerify()
    {
        
    }
}


?>