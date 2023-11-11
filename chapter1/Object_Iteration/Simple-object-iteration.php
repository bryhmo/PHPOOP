

<?php

/* PHP provides a way for objects to be defined so it is possible to iterate through a list of items, with, for example a foreach statement. By default, all visible properties will be used for the iteration. */

class Myclass 
{
    public $var1 = "Value 1";
    public $var2 = "Value 2";
    public $var3 = "Value 3";


    protected $protected = 'protected var';
    private $private = "private var";

    function iterativeVarable()
    {
        echo "MyClass::iterateVisible".'<br>';
        foreach($this as $key => $value){
            print "$key => $value".'<br>' ;
        } 
    }
}

$class = new MyClass();

foreach ($class as $key => $value) {
    print "$key => $value"."<br>"; 
}

echo"<br>";

 $class->iterativeVarable();



 /* output
 var1 => value 1
var2 => value 2
var3 => value 3

MyClass::iterateVisible:
var1 => value 1
var2 => value 2
var3 => value 3
protected => protected var
private => private var
 
 
 */
?>