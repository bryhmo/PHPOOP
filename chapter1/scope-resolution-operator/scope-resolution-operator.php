<?php


/* :: from outside the class definition */
class MyClass
{
    const CONST_VALUE = 'A constant value';
}

$classname = 'MyClass';
echo $classname::CONST_VALUE;

MyClass::CONST_VALUE;


/* Three special keywords self, parent and static are used to access properties or methods from inside the class definition. */
//:: from inside the class definition

class OtherClass extends MyClass
{
    public static $my_static = 'static var';

    public static function InsideClassDef() {
        parent::CONST_VALUE . "\n";
        self::$my_static . "\n";
    }
}
$classname = 'OtherClass';
$classname::InsideClassDef;

OtherClass::$my_static;
OtherClass::CONST_VALUE;
OtherClass::InsideClassDef();


/* When an extending class , overrides the parent's definition of a method, PHP will not call the parent's method. 
It's up to the extended class on whether or not the parent's method is called. 
This also applies to Constructors and Destructors, Overloading, and Magic method definitions. */

/* ====== Calling a parent's method ===== */

class ParentClass
{
    protected function myFunct(){
        echo "ParentClass::myFunct() \n";
    }
}

class ChildClass extends ParentClass
{
    //override the parent's method 
    public function myFunct(){
        //But still call the parent class function
        parent::myFunct();
        echo "ChildClass::myFunct() \n";
    }
}

$class = new ChildClass;
$class->myFunct();

?>