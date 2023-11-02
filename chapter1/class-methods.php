<?php


//creating class 

class product
{
    public $name = 'soap';
    public $price;


    // class method 
    /* Methods must be created inside the class's curly braces 
        Methods are usually created below the properties , but this is not essential
    */

    public function priceCurrency()
    {
        $priceAsCurrency = $this->price/100;
        //this is a special variable called a pseudo-variable
        //the name is important ,it must be spelt the same.
        return $priceAsCurrency;
    }


}

// $soapobject1 = new product();
$soapobject1->price = 550;

// $soapobject2 = new product();
$soapobject2->price = 650;

$PCurrency = $soapobject2->priceCurrency();
var_dump($PCurrency).PHP_EOL;

?>