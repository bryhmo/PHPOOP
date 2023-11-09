<?php

/* 
Interfaces can be extended like classes using the extends operator. */

interface A
{
    public function getRegisterUser();
}

interface B extends A
{
    public function UserCatch(string $baz);
}

// this will work

class C implements B
{
    public function getRegisterUser()
    {
        
    }
    public function UserCatch(string $baz)
    {
        
    }
}


// this will not work and result in a fatal error 
/* class D implements B
{
    public function getRegisterUser()
    {
        
    }

    public function UserCatch(array $baz)
    {
        
    }
} */

?>