<?php

/**
 * Define MyClass
 */
class MyClass {
    //Declare a public constant
    public const MY_PUBLIC = 'public';

    //declare a protected const
    protected const MY_PROTECTED = 'protected';

    //declare a private const
    private const MY_PRIVATE = 'private';

    // the function 
    public function foo()
    {
        self::MY_PUBLIC;
        self::MY_PROTECTED;
        self::MY_PRIVATE;
    }

}
$myclass_intantaiate = new MyClass;
MyClass::MY_PUBLIC;
// MyClass::MY_PRIVATE;
// MyClass::MY_PROTECTED;
$myclass->foo();







/* ====== Accessing private members of the same object type =======*/
class Test
{
    private $foo;

    public function __construct($foo1)
    {
        $this->foo = $foo1;
    }

    private function bar()
    {
        echo 'Accessed the private method.';
    }

    public function baz(Test $other)
    {
        // We can change the private property:
        $other->foo = 'hello';
        var_dump($other->foo);

        // We can also call the private method:
        $other->bar();
    }
}

$test = new Test('test');

$test->baz(new Test('other'))



?>