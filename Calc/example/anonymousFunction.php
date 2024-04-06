<?php
// В PHP анонимные функции (также известные как замыкания или closures) можно использовать в различных контекстах. Вот несколько примеров функций, которые могут использовать анонимные функции:
// array_map():

$numbers = [1, 2, 3, 4, 5];
$squared = array_map(
    function ($x) {
        return $x * $x;
    },
    $numbers
);
print_r($squared);

echo '<br>';

// usort
$fruits = ["Apple", "Banana", "Orange", "Cherry"];
usort(
    $fruits,
    function ($a, $b) {
        return strlen($a) - strlen($b);
    }
);
print_r($fruits);

echo '<br>';

// Метод array_filter():
$numbers = [1, 2, 3, 4, 5];
$evenNumbers = array_filter(
    $numbers,
    function ($x) {
        return $x % 2 == 0;
    }
);
print_r($evenNumbers);

echo '<br>';

// Функция array_reduce():

$numbers = [1, 2, 3, 4, 5];
$sum = array_reduce(
    $numbers,
    function ($carry, $item) {
        return $carry + $item;
    }
);
echo $sum;

// Стрелочные функции - переписать на этот синтаксис

// Это лишь несколько примеров использования анонимных функций в PHP
// Они могут быть использованы практически везде, где требуется передача
// функции в качестве аргумента другой функции или метода
/**
 * Но вы также можете написать код, например функцию, которая будет принимать на вход анонимную функцию как аргумент
 */
