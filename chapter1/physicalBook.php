<?php
class physicalBook
{
    public $title;
    public $author;
    public $price;
    public $weight;


    public function __construct(string $d_title, string $d_author,int $d_price,int $d_weight = 0,)
    {
        $this->title = $d_title;
        $this->author = $d_author;
        $this->price = $d_price;
        $this->weight = $d_weight;
    
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





    public function print():string 
    {
        return "{$this->title}, {$this->author}, weight:{$this->weight}";

    }
}


?>