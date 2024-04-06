<?php

declare(strict_types=1);

namespace ObjectOriented\Classes\Abstraction\ShopCart;

class BookProduct extends Product
{
    public function getId(): int
    {
        return $this->id;
    }
}
