<?php

// A SPECIAL KIND OF METHOD CALLED CONSTRUCTOR 
//the constructor are called the magic constructor bc they execute behind the seen

class product 
{
    public $name;
    public $price;



    //==== CONSTRUCTOR =====
    /* you will use constructors to do whatever should always be done - and done first - when an object of this class is made */
    public function __construct($fullname = 'mayowa', $priceOfProduct= 400)
    {
        $this->name = $fullname;
        $this->price = $priceOfProduct;
    }


    public function priceAsCurrency($divisor = 1,$currencySymbol = '$')
    {
        $CurrencyPrice = $this->price/$divisor;
        return $currencySymbol.$CurrencyPrice;
        
    }
}
// $product1 = new product;
$product1 = new product('custard',3000);

print $product1->name.'<br>';
print $product1->price.'<br>';


$product2 = new product('garri',4000);

print $product2->name.'<br>';
print $product2->price.'<br>';

$product3 = new product(priceOfProduct:7000);
print $product3->name.'<br>';
print $product3->price.'<br>';


//challenge 
#give the constructor arguments default values
#use named arguments to only pass a price argument 



//constructor promoted properties 

class product1
{
    public function __construct(public $dname = 'bornvita', public $dprice = 100)
    {
    
    }
}

$p1 = new product1(dprice:4350);
print $p1->dname;
print $p1->dprice;




?>