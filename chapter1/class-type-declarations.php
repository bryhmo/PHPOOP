<?php

require_once 'playlist.php';
require_once 'song.php';


$playlist = new playlist();


$song1 = new song('Blackbird  ',100); // this is a song object
$song2 = new song('  in a minute',400); //this is just a string 


$playlist->addsong($song1);
$playlist->addsong($song2);


// print count($playlist->songs);

foreach ($playlist->songs as $songname)
{
   print $songname->name.PHP_EOL;
}

?>