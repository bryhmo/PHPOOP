<?php
/* Object interfaces allow you to create code which specifies which methods a class must implement, without having to define how these methods are implemented. Interfaces share a namespace with classes and traits, 
so they may not use the same name. */


/* Interfaces are defined in the same way as a class,
 but with the interface keyword replacing the class keyword and without any of the methods having their contents defined.*/


 /* All methods declared in an interface must be public; 
 this is the nature of an interface. */

 /* To implement an interface, the implements operator is used. All methods in the interface must be implemented within a class; failure to do so will result in a fatal error. Classes may implement more than one interface if desired by separating each interface with a comma. */

 /* 
Interfaces can be extended like classes using the extends operator.
 */

 /* Note:

The class implementing the interface must declare all methods in the interface with a compatible signature. 
A class can implement multiple interfaces which declare a method with the same name. 
In this case, the implementation must follow the signature compatibility rules for all the interfaces. 
So covariance and contravariance can be applied */


/* Constants ¶
It's possible for interfaces to have constants. 
Interface constants work exactly like class constants.
 Prior to PHP 8.1.0, they cannot be overridden by a class/interface that inherits them.
 */
//declaring the interface 'Template'
interface Template
{
    public function setVariable($name, $var);
    public function getHtml($template);
}

//implement the interface 
//this will work 

class WorkingTemplate implements Template
{
    private $variables_vars = [];
    public function setVariable($name, $var)
    {
        $this->variables_vars[$name] = $var;
    }

    public function getHtml($template)
    {
        foreach($this->variables_vars as $name => $value){
            $template = str_replace('{' . $name . '}', $value, $template);
        }

        return $template;
    }
}



// This will not work
// Fatal error: Class BadTemplate contains 1 abstract methods
// and must therefore be declared abstract (Template::getHtml)

/* class BadTemplate implements Template

{

    private $variables_vars = [];

    public function setVariable($name, $var)

    {
        $this->variables_vars[$name] = $var;
    }

} */


?>