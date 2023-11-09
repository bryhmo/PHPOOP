<?php
abstract class abstractClass 
{
    abstract protected function prefixName($name);
}
class myPrefixClass extends abstractClass
{
    public function prefixName($name ,$separator = '.')
    {
        if($name =='ibrahim'){
            $prefix = 'Dr';
        }
        elseif($name =='aishat'){
            $prefix = 'Mrs';
        }
        else {
            $prefix = '';
        }

        return "{$prefix}{$separator}{$name}".'<br>';
    }

}

$person1 = new myPrefixClass();

print $person1->prefixName('ibrahim');
echo $person1->prefixName('aishat');


/* an Abstract Class is like a partially built class. It is much like a document with blanks to fill in. 
It might be using English, but that isn't as important as the fact that some of the document is already written.
 */

 /* An abstract class is the foundation for another object. When a class says "I extend abstract class Y",
  it is saying "I use some methods or properties already defined in this other class named Y". */
?>