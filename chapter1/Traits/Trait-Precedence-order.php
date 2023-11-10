<?php 



/* An inherited member from a base class is overridden by a member inserted by a Trait. The precedence order is that members from the current class override Trait methods, which in turn override inherited methods. */


/* 
An inherited method from a base class is overridden by the method inserted into MyHelloWorld from the SayWorld Trait. The behavior is the same for methods defined in the MyHelloWorld class.
The precedence order is that methods from the current class override Trait methods, which in turn override methods from the base class
*/


class Base {
    public function sayHello(){
        echo 'Hello';
    }
}

trait SayWolrd {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
}

class MyHelloWorld extends Base {
    use SayWolrd;
}

$o = new MyHelloWorld();
$o->sayHello();


//ALTERNATIVELY YOU CAN USE THIS PRECEDENCE

trait HelloWorld {
    public function sayHello() {
        echo 'Hello World!';
    }
}

class TheWorldIsNotEnough {
    use HelloWorld;
    public function sayHello() {
        echo 'Hello Universe!';
    }
}

$o = new TheWorldIsNotEnough();
$o->sayHello();

?>