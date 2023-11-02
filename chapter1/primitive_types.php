<?php

/* 
primitive types 

boolean
integer
float
string
object
resource
array
null

*/

declare(strict_types=1);

require_once 'song.php';

//passing the wrong parameter values

/* $song = new song(56,44); 
to solve this issues of converting string to number by itself .... use::: declare(strict_types=1);

*/
$song = new song('in a minute',44); 

var_dump($song->name).PHP_EOL;
var_dump($song->numberOfPlays);





?>