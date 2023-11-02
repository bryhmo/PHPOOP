<?php

class Foo1{
    public static function aStaticMethod(){
        //........
    }
}

//accessing the function without an instantiation
Foo1::aStaticMethod();
$classname = 'Foo1';
$classname::aStaticMethod();


/*  Static Properties  */
// a static properties are accesed using the SCOPE RESOLUTION OPERATOR (::)
//and cannot be accessed through the object operator(->)


//Static Property Example

class Foo2
{
    public static $my_static = 'Foo2';

    public function staticValue(){
        return self::$my_static;
    }
}


class Bar extends Foo2
{
    public function FooStatic() {
        return parent::$my_static ;
    }
}


print Foo2::$my_static;

//this beloe code will show ;;;; undefined property  my_static

$Foo = new Foo2();
print $Foo->staticValue()."\n";
// print $Foo->my_static()."\n";


print $Foo::$my_static."\n";

$classname1 = 'Foo2';
print $classname1::$my_static."\n";


print Bar::$my_static ."\n";
$bar = new bar();
print $bar->FooStatic() . "\n";

?>