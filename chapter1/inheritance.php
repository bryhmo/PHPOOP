<?php
//this is an inheritance of the book.php class 
require_once 'book.php';


$physicalBook = new Book('A Random Book','Jane Doe',2000,'physical' );
$digitalBook = new Book('A Random Book','Jane digital',2000, 'digital');

print $physicalBook->getAuthor().'<br>';
print $digitalBook->getAuthor().'<br>';


print $physicalBook->getWeight().'<br>';
print $digitalBook->getFilesize().'<br>';

print $physicalBook->print().'<br>';
print $digitalBook->print().'<br>';


?>