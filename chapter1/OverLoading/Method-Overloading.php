<?php

/*
public __call(string $name, array $arguments):mixed
__call() is triggered when invoking inaccessible methods in an object context.



public static __callStatic(string $name, array $arguments):mixed
__callStatic() is triggered when invoking inaccessible methods in a static context.


The $name argument is the name of the method being called. The $arguments argument is an enumerated array containing the parameters passed to the $name'ed method 
*/

class MethodTest
{
    public function __call($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo "Calling object method '$name' "
             . implode(', ', $arguments). "\n";
    }

    public static function __callStatic($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo "Calling static method '$name' "
             . implode(', ', $arguments). "\n";
    }
}

$obj = new MethodTest;
$obj->runTest('in object context');

MethodTest::runTest('in static context');

?>