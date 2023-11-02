<!-- declare(strict_types = 1); -->
<?php

//creating class 



class song {
    public $name;
    public $numberOfPlays;



    public function __construct(string $nameOfSong, int $playNumbers)
    {
        $this->name = $nameOfSong;
        $this->numberOfPlays = $playNumbers;
    }
}
/* $song = new song(56,44); */

//class type declaration using the premitive type





