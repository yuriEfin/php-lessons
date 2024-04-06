<?php


class Product
{
    protected $name;
    protected $price;
    
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    
    public function getInfo()
    {
        return "Name: {$this->name}, Price: {$this->price}";
    }
}

class Book extends Product
{
    protected $author;
    
    public function __construct($name, $price, $author)
    {
        parent::__construct($name, $price);
        $this->author = $author;
    }
    
    public function getInfo()
    {
        return parent::getInfo() . ", Author: {$this->author}";
    }
}

class Clothing extends Product
{
    protected $size;
    
    public function __construct($name, $price, $size)
    {
        parent::__construct($name, $price);
        $this->size = $size;
    }
    
    public function getInfo()
    {
        return parent::getInfo() . ", Size: {$this->size}";
    }
}

// Создание объектов и вызов метода getInfo()
$book = new Book("The Great Gatsby", 20, "F. Scott Fitzgerald");
echo $book->getInfo(); // Выводит: Name: The Great Gatsby, Price: 20, Author: F. Scott Fitzgerald

echo "\n";

$clothing = new Clothing("T-shirt", 15, "M");
echo $clothing->getInfo(); // Выводит: Name: T-shirt, Price: 15, Size: M
