<?php


class Product
{
    // объявление свойства
    private string   $title;
    private string   $description;
    private float    $price;
    private int      $discount;
    private DateTime $createdAt;
    
    public function __construct(
        string $title,
        string $description,
        float $price,
        int $discount,
        DateTime $createdAt
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->discount = $discount;
        $this->createdAt = $createdAt;
    }
    
    public function getTitle(): string
    {
        return $this->title;
    }
    
    public function getDescription(): string
    {
        return $this->description;
    }
    
    public function getPrice(): float
    {
        return $this->price;
    }
    
    public function getDiscount(): int
    {
        return $this->discount;
    }
    
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }
}

class NewProduct extends Product
{
    public function __construct()
    {
    }
}

echo '<pre/>';

// $products = DbConnect::findAll();

$products = [
    new Product(
        'Кроссовки',
        'Описание кроссовок',
        15500,
        10,
        new DateTime('now')
    ),
    new Product(
        'Кроссовки2',
        'Описание кроссовок2',
        15502,
        2,
        new DateTime('now')
    ),
    new Product(
        'Кроссовки3',
        'Описание кроссовок3',
        15503,
        3,
        new DateTime('now')
    ),
    new Product(
        'Кроссовки4',
        'Описание кроссовок4',
        15504,
        4,
        new DateTime('now')
    ),
];

foreach ($products as $product) {
    echo '<p> Наименование: ' . ($product->getTitle()) . '<p>';
    echo '<p> Описание: ' . ($product->getDescription()) . '<p>';
    echo '<p> Цена: ' . ($product->getPrice()) . '<p>';
    echo '<p> Скидка: ' . ($product->getDiscount()) . '<p>';
    echo '<p> Дата поступления: ' . ($product->getCreatedAt()->format('d-m-Y H-i-s')) . '<p>';
    echo '<hr>';
}


// var_dump($products);
