<?php

declare(strict_types=1);

namespace ObjectOriented\examples;

class Product
{
    public function __construct(
        public string $title,
        public string $description,
        public float $price
    ) {
    }
}

class BookProduct extends Product
{
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}

class ClothingProduct extends Product
{
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
}

$bookProduct = new BookProduct();
$bookProduct->title = 'Книга';
$bookProduct->ggg();

$clothingProduct = new ClothingProduct();
$clothingProduct->title = 'Сумка';
$clothingProduct->ggg();
echo '<pre>';
var_export(
    [
        'book'     => $bookProduct,
        'clothing' => $clothingProduct,
    ]
);
