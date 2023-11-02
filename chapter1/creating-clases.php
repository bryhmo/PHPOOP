
<?php
/* creating classes  */

class product 
{

    /* Access modifier
        PUBLIC 
        PRIVATE
        PROTECTED
    */

    //properties are like a variable which belong to a class


}




// creating an instance of class product
// $product1 = new product();
// $anotherproduct = new product();
var_dump($product1);
var_dump($anotherproduct);



class productt
{
    //properties 
     public $name = 'soap';
     public $price = 6000;

}

$soapobject = new productt();
print $soapobject->name.'<br>';
$soapobject->name = "toothpaste";
print $soapobject->name.'<br>';



//FIRST CHALLENGE
/* 
1. create a price property and give it a default integer value 
2. Access the price on a product object and print it
3. Change the price 
4. Access the (new) price on a product object and print it 

*/
//solution
$newprice = new productt();
print $newprice->price.'<br>';
$newprice->price = 7500;
print $newprice->price;



?>
