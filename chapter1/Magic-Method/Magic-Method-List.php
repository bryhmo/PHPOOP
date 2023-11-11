<?php
/* Magic methods are special methods which override PHP's default's action when certain actions are performed on an object. */


/*Caution
All methods names starting with __ are reserved by PHP. Therefore, it is not recommended to use such method names unless overriding PHP's behavior.  */


/*  The following method names are considered magical:*/
 /* 
 
 __construct();
 __destruct();
 __call();
 __callStatic();
 __get();
 __set();
 __isset();
 __unset(); 
 __sleep();
 __wakeup();
 __serialize(); 
 __unserialize();
 __toString();
 __invoke();
 __set_state();
 __clone();
__debugInfo();


Warning
All magic methods, with the exception of __construct(), __destruct(), and __clone(), must be declared as public
Warning
If type declarations are used in the definition of a magic method, they must be identical to the signature described in this document. 


*/




?>