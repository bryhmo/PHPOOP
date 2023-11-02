<?php

class Book

{
    public $title;
    public $author;
    public $price;
    public $weight;
    public $type;
    public $filesize;


    public function __construct(string $d_title, string $d_author,int $d_price,string $d_type,int $d_weight = 0,int $d_filesize = 0,)
    {
        $this->title = $d_title;
        $this->author = $d_author;
        $this->price = $d_price;
        $this->type = $d_type;
        $this->weight = $d_weight;
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


    public function getWeight():int
    {
        return $this->weight;
    }


    public function getFileSize():int
    {
        return $this->filesize;
    }
   



    public function print()
    {
        $string = "{$this->title}, {$this->author}, ";

        if($this->type === 'physical') {
            $string.= "Weight: {$this->weight}";
        }elseif($this->type === 'digital') {
            $string.=" Filesize: {$this->filesize}";
        }
        return $string;
    }
}

?>