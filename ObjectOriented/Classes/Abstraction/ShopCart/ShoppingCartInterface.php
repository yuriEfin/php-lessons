<?php

declare(strict_types=1);

namespace ObjectOriented\Classes\Abstraction\ShopCart;

interface ShoppingCartInterface
{
    public function add(Product $product, int $quantity = 1);
    
    public function remove(int $id);
    
    public function update(int $id, int $quantity);
}
