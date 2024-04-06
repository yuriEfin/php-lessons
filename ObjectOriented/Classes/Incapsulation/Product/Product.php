<?php

declare(strict_types=1);

namespace ObjectOriented\Classes\Incapsulation\Product;

class Product
{
    protected int    $id;
    protected string $title;
    protected string $description;
    
    public function __construct(int $id, string $title, string $description)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
    }
    
    private function getDescription(): string
    {
        return $this->description;
    }
    
    public function getTitle(): string
    {
        return $this->title;
    }
    
    protected function changeTitle(string $title): void
    {
        $this->title = $title;
    }
}




