<?php

class Book{

    private $author;
    private $title;
    private $price;


    public function __construct(string $author, string $title, float $price)
    {
        $this->setAuthor($author);
        $this->setTitle($title);
        $this->setPrice($price);
    }

    private function setTitle($title)
    {
        if(strlen($title) < 3){
            throw new Exception("Title not valid!");
        }

        $this->title = $title;
    }


    private function setAuthor($author)
    {
        $names = explode(' ', $author);
        if(is_numeric($names[0][0])){
            throw new Exception("Author not valid!");
        }

        $this->author = $author;
    }


    private function setPrice($price)
    {
        if($price <= 0){
            throw new Exception("Price not valid!");
        }

        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function __toString():string
    {
       return "OK \r\n" . $this->getPrice();
    }

}

class goldenEditionBook extends Book {

    public function getPrice(): float
    {
        return parent::getPrice() * 1.3;
    }
}

try{
    //$name = trim(fgets(STDIN));
    $author = trim('4eorgi Petrov');
    //$title = trim(fgets(STDIN));
    $title = trim('Summer Moon');
   // $price = floatval(fgets(STDIN));
    $price = floatval(22);
   // $type = trim(fgets(STDIN));
    $type = trim('STANDARD');

    if($type === 'GOLD'){
        $book = new goldenEditionBook($author, $title, $price);
       // echo $book->getPrice();
    }elseif($type === 'STANDARD'){
        $book = new Book($author, $title, $price);

       // echo $book->getPrice();
    }else{
        throw new Exception("Type is not valid!");
    }

    echo $book;
}catch (Exception  $e){
    echo $e->getMessage();
}