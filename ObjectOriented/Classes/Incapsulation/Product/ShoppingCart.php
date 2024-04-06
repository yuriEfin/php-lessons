<?php

namespace ObjectOriented\Classes\Incapsulation\Product;

class ShoppingCart
{
    private array $items = [];
    
    public function addProduct(Product $product, int $quantity = 0): void
    {
        $this->items[] = ['product' => $product, 'quantity' => $quantity];
    }
    
    public function getTotalPrice(): float
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['quantity'] * $item['product']->getPrice();
        }
        
        return $total;
    }
}
