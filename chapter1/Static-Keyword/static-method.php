<?php

/* This page describes the use of the static keyword to define static methods and properties. 
static can also be used to define static variables, define static anonymous functions and for late static bindings.
*/

/* Declaring class properties or methods as static makes them accessible without needing an instantiation of the class.
 These can also be accessed statically within an instantiated class object. */

 /* Because static methods are callable without an instance of the object created, 
 the pseudo-variable $this is not available inside methods declared as static. */


 /* ========== NOTE1 ===============*/
 /* Calling non-static methods statically throws an Error. */


 /* =====Static method example=== */

 class StaticClass
 {
    public static function aStaticMethod(){
        //......
        //.....
    }
 }
StaticClass::aStaticMethod();
$myNewClass = 'StaticClass';
$myNewClass::aStaticMethod();


/* ======= Static Properties ====== */
/* Static properties are accessed using the Scope Resolution Operator (::) 
and cannot be accessed through the object operator (->). */

/* It's possible to reference the class using a variable. 
The variable's value cannot be a keyword (e.g. self, parent and static). */

/* Static property example */

class mystaticProperty
{
    public static $my_static = 'ademide';


    public function staticValue() {
        return self::$my_static;
    }
}

class smallClass extends mystaticProperty
{
    public function smallStatic()
    {
        return parent::$my_static;
    }
}

print mystaticProperty::$my_static.'<br>';

$staticProperty = new mystaticProperty();
print $staticProperty->staticValue().'<br>';
print $staticProperty->$my_static.'<br>';
print $staticProperty::$my_static.'<br>';


print $staticProperty::$my_static.'<br>';
$className = 'mystaticProperty';
$className::$my_static;

print smallClass::$my_static.'<br>';
$small = new smallClass;
print $small->smallStatic();
?>