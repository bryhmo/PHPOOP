

<?php
class product 
{
    public $name = 'soap';
    public $price = 200;



    public function priceAsCurrency($divisor = 10, $currencySymbol = '$' )
    {
        // $priceascurrency = $this->price/100;
        $priceascurrency = $this->price/$divisor;
        return $currencySymbol. $priceascurrency;
    }
}

// challenge
/*
 give a divisor a default value
 test it out without a default value
 */

// $product = new product;

//the method argument choose the first parameter by default 
//if we want to use the second parameter ,then we will use the NAMED ARGUMENT  
print $product->priceAsCurrency(currencySymbol:'#').PHP_EOL;






?>