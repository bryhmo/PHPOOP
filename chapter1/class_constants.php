<?php
class MyClass 
{
    //the default visibility of class constants is public 
    const CONSTANT = 'constant value';



    function showConstant() {
        echo self::CONSTANT.'<br>';
    }
}

echo Myclass::CONSTANT;

$classname = "MyClass";
echo $classname::CONSTANT."<br>";

$class = new MyClass();
$class->showConstant();

echo $class::CONSTANT.'<br>'


//EXAMPLE OF NAMESPACE CLASS 


/* namespace shoeBrand {
    class brand {

    }

    echo bar::class; // foo/bar

} */


//example of constant expression 


?>