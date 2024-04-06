<?php

declare(strict_types=1);

namespace ObjectOriented\Classes\Abstraction\ShopCart;

abstract class Product
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
    
    abstract public function getId();
}




