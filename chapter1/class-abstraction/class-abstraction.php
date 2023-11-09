<?php
/* PHP has abstract classes and methods.
Classes defined as abstract cannot be instantiated,
and any class that contains at least one abstract 
method must also be abstract. 
Methods defined as abstract simply declare the method's signature; 
they cannot define the implementation.

When inheriting from an abstract class, all methods marked abstract in the parent's class declaration must be defined by the child class, and follow the usual inheritance and signature compatibility rules. */
abstract class myAbstractClass
{

    //force extending class to define this method 
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    //common method 
    public function printOut(){
        print  $this->getValue();
    }

}

class ConcreteClass1 extends myAbstractClass
{
    protected function getValue()
    {
        return "concreteclass1 is here".'<br>';
    }
    public function prefixValue($prefix)
    {
        return "{$prefix}  this is the concreteclass1 value";
    }

}

class ConcreteClass2 extends myAbstractClass
{
    public function getValue()
    {
        return "this is the ConcreteClass2 ".'<br>';
    }
    public function prefixValue($prefix)
    {
        return "{$prefix} concreteclass2 is here";
    }
}

$class1 = new ConcreteClass1();
$class1->printOut();
echo $class1->prefixValue('ibroman').'<br>';


$class2 = new ConcreteClass2();
$class2->printOut();
print $class2->prefixValue('bryhmo');
