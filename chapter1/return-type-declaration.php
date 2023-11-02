<?php

require_once 'playlist.php';
require_once 'song.php';


$playlist = new playlist();


$song1 = new song('Blackbird  ',100); // this is a song object
$song2 = new song('  in a minute',400); //this is just a string 


$playlist->addsong($song1);
$playlist->addsong($song2);

if($playlist->getLength() < 10) 
{
    print 'short playlist......'.PHP_EOL;
}

?>