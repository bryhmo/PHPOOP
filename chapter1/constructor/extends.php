<?php
//require_once 'chapter1/Constructor-Destructor.php';


/* CONSTRUCTOR PROMOTION */
class promotion {
    public function __construct(protected int $x, protected int $int)
    {
        
    }
}

$promotion = new promotion(34,35);

?>