<?php
//this is an inheritance of the book.php class 
require_once 'book.php';
require_once 'physicalBook.php';
require_once 'digitalBook.php';


$physicalBook = new Book('A Random Book','Jane Doe',2000,'physical' );
$digitalBook = new Book('A Random Book','Jane digital',2000, 'digital');

print $physicalBook->getAuthor().'<br>';
print $digitalBook->getAuthor().'<br>';


print $physicalBook->getWeight().'<br>';
print $digitalBook->getFilesize().'<br>';

print $physicalBook->print().'<br>';
print $digitalBook->print().'<br>';

$physicalBook1 = new physicalBook('A Random Book','Jane Doe',20000,300 );
$digitalBook1 = new digitalBook('A Random Book','Jane digital',2000, 1048);

echo $physicalBook1->print().'<br>';
echo $digitalBook1->print().'<br>';
echo $digitalBook1->getPriceAsCurrency().'<br>';
echo $physicalBook1->getPriceAsCurrency();
?>