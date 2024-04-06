# Использование

Делаем с вами корзину товаров в интернет магазине

## Пример 1

```php

use ObjectOriented\Classes\Abstraction\ShopCart\BookProduct;
use ObjectOriented\Classes\Abstraction\ShopCart\ShoppingCart;
use ObjectOriented\Classes\Abstraction\ShopCart\Product;

// создаем объекты конкретной реализации абстрактного класса Product 
// мы на 100% уверены что в конкретной реализации есть метод getId(),
// который нам нужен для корректной работы корзины товаров -
// так как BookProduct является наследником абстракции в которой определен этот метод
$product = new BookProduct(1, 'Кроссовки', 'Крутые кроссы 1');
$product2 = new BookProduct(2, 'Кроссовки2', 'Крутые кроссы 2');
$product3 = new BookProduct(3, 'Кроссовки3', 'Крутые кроссы 3');

$shopCart = new ShoppingCart();
$shopCart->add($product);
```
## Пример 2
Уберите наследование от абстрактного класса Product и пропишите вместо наследования implements ProductInterface
Класс Product получится таким :

```php
use ObjectOriented\Classes\Abstraction\ShopCart\ProductInterface;
class Product implements ProductInterface 
{

}
```

Использование Абстракции через интерфейс: 

```php

use ObjectOriented\Classes\Abstraction\ShopCart\BookProduct;
use ObjectOriented\Classes\Abstraction\ShopCart\ShoppingCart;
use ObjectOriented\Classes\Abstraction\ShopCart\Product;
use ObjectOriented\Classes\Abstraction\ShopCart\ProductInterface;

// создаем объекты конкретной реализации ProductInterface
// мы на 100% уверены, что в конкретной реализации (BookProduct) есть метод getId(),
// который нам нужен для корректной работы корзины товаров -
// так как BookProduct реализует ProductInterface (он наследуется от Product, который реализует интерфейс ProductInterface)
// то есть через наследование и BookProduct получает реализацию ProductInterface
$product = new BookProduct(1, 'Кроссовки', 'Крутые кроссы 1');
$product2 = new BookProduct(2, 'Кроссовки2', 'Крутые кроссы 2');
$product3 = new BookProduct(3, 'Кроссовки3', 'Крутые кроссы 3');

$shopCart = new ShoppingCart();
$shopCart->add($product);
```
