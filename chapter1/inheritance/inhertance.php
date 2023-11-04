<?php

/* Inheritance is a well-established programming principle, 
and PHP makes use of this principle in its object model. 
This principle will affect the way many classes and objects relate to one another. */


/* 
For example, when extending a class, the subclass inherits all of the public and protected methods, properties and constants from the parent class.
 Unless a class overrides those methods, they will retain their original functionality. */


/* This is useful for defining and abstracting functionality,
 and permits the implementation of additional functionality in similar objects without the need to reimplement all of the shared functionality. */
 
 
 

/* Private methods of a parent class are not accessible to a child class.
 As a result, child classes may reimplement a private method themselves without regard for normal inheritance rules. */
 
 
 /* The visibility of methods, properties and constants can be relaxed, e.g. a protected method can be marked as public,
  but they cannot be restricted, e.g. marking a public property as private. An exception are constructors, whose visibility can be restricted, e.g. a public constructor can be marked as private in a child class. */
 


  /* ======== NOTES ====== */
  /* 
  Unless autoloading is used, the classes must be defined before they are used.
   If a class extends another, then the parent class must be declared before the child class structure. 
  This rule applies to classes that inherit other classes and interfaces.
  */

  /* =======  NOTES    =========   
  It is not allowed to override a read-write property with a readonly property or vice versa.
  
  */
 class Foo
{
    public function printItem($string)
    {
        echo 'Foo: '.$string.'<br>';

    }
    public function printPHP()
    {
        echo 'PHP is great. '.'<br>';
    }
}

class Bar extends Foo
{
    public function printItem($string)
    {
        echo 'Bar: '. $string.'<br>';
    }
}

//create an instance of the class object
$foo = new Foo();
$bar = new Bar();

/* initiatialize the objects */
$foo->printItem('baz ');    // OUTPUT : 'foo : baz '
$foo->printPHP();           // OUTPUT : 'PHP is great'
$bar->printItem('baz ');    // OUTPUT : 'Bar: baz '
$foo->printPHP();           // OUTPUT : 'PHP is great'




?>