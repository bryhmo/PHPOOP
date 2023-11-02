<?php
 //thsi playlist can hold more than one song ,we are going to add song to the playlist


 class playlist
 {
    public $songs = [];


    public function addsong(song $song):void //This void  is the special pseudo class
    {
        $this->songs[] = $song;

    }


    // RETURN TYPE DECLARATION

    public function getLength(): int
    {
        return count($this->songs);

    }

 }

?>