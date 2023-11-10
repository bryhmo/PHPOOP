
<?php


/*
 public __set(string $name , mixed $value ):void;

__set is run when writing data to inaccessible (protected or private) or non- existing properties




public __get(string $name ):mixed;
__get() is utilized for reading data from inaccessible (protected or private) or non-existing properties.


public __isset(string $name  ):bool;
__isset() is triggered by calling isset() or empty() on inaccessible (protected or private) or non-existing properties.



public __unset(string $name ):void; 
__unset() is invoked when unset() is used on inaccessible (protected or private) or non-existing properties

*/


/* The $name argument is the name of the property being interacted with. The __set() method's $value argument specifies the value the $name'ed property should be set to. */

/* Property overloading only works in object context. These magic methods will not be triggered in static context. Therefore these methods should not be declared static.
 A warning is issued if one of the magic overloading methods is declared static. */
/*  */


class PropertyTest 
{
    /* Location for overloaded data */
    private $data = array();

    /* Overloading not used on declared properties  */
    public $declared = 1;

    /**  Overloading only used on this when accessed outside the class.  */
    private $hidden = 2;

    public function __set($name, $value)
    {
        echo "Setiing $name  to $value".'<br>';
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        echo "Getting $name ";
        if(array_key_exists($name, $this->data)){
           return $this->data[$name];
        }

        $trace = debug_backtrace();
        trigger_error(
            'Udefined property via __get(): ' .$name .
            'in ' . $trace[0][' file '] . 
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }

    public function __isset($name)
    {
        echo "Is $name set?".'<br>';

        return isset($this->data[$name]);
    }


    public function __unset($name)
    {
        echo "Unsetting $name ".'<br>';

        unset($this->data[$name]);
    }

    /* not a magic function just there for example */

    public function getHidden()
    {
        return $this->hidden;
    }
   
}


echo "<pre>".'<br>';

$obj = new PropertyTest;

$obj->a = 1;
echo $obj->a . "\n\n";

var_dump(isset($obj->a));
unset($obj->a);
var_dump(isset($obj->a));
echo "\n";

echo $obj->declared . "\n\n";

echo "Let's experiment with the private property named 'hidden':\n";
echo "Privates are visible inside the class, so __get() not used...\n";
echo $obj->getHidden() . "\n";
echo "Privates not visible outside of class, so __get() is used...\n";
echo $obj->hidden . "\n";
?>