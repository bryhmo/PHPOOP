<?php

class digitalBook
{
    public $title;
    public $author;
    public $price;
    public $filesize;


    public function __construct(string $d_title, string $d_author,int $d_price,int $d_filesize = 0,)
    {
        $this->title = $d_title;
        $this->author = $d_author;
        $this->price = $d_price;
        $this->filesize = $d_filesize;
    }

    public function getTitle():string
    {
        return $this->title;
    }


    public function getAuthor():string
    {
        return $this->author;
    }


    public function getPrice():int
    {
        return $this->price;
    }

    public function getFileSize():int
    {
        return $this->filesize;
    }

    public function getPriceAsCurrency():string
    {
        return "$". $this->price/100 ;

    }



    public function print():string
    {
        return  "{$this->title}, {$this->author}, Filesize:{$this->filesize} ";

        
    }
}


?>