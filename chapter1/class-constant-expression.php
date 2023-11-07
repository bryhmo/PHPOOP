<?php


const ONE = 1;
class aritmetic{
    const TWO = ONE * 2;
    const THREE = ONE * self::TWO;
    const SENTENCE = 'The value of THREE is '.self::THREE;
}

/* 
Since it it is not mentioned in the description 
the following types can be set as a class constant: string, array, int, bool and probably float. 
But not objects. 
*/

class test {
    const arr = array();
    const string = 'string';
    const int = 99;
    const bool = true;
}
var_dump(
    (new test(6))::arr,
    (new test(6))::string,
    (new test(6))::int,
    (new test(6))::bool,
);

?>