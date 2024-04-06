<?php

declare(strict_types=1);

namespace ObjectOriented\Classes\Abstraction\ShopCart;

class ShoppingCart implements ShoppingCartInterface
{
    private array $items = [];
    
    public function add(Product $product, int $quantity = 1): void
    {
        $this->items[$product->getId()] = $quantity;
    }
    
    public function remove(int $id): void
    {
        unset($this->items[$id]);
    }
    
    public function update(int $id, int $quantity): void
    {
        $this->items[$id] = $quantity;
    }
    
    public function getItems(): array
    {
        return $this->items;
    }
}
