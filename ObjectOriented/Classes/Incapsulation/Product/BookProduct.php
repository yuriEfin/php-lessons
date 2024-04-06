<?php

namespace ObjectOriented\Classes\Incapsulation\Product;

class BookProduct extends Product
{
    public string $author;
    
    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }
    
    public function getAuthor(): string
    {
        return $this->author;
    }
    
    public function getTitle(): string
    {
        return $this->title;
    }
}
