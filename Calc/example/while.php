<?php

/*
while
do-while
for
foreach
*/

// $products = DbConn::findAll(); // products

$products = [
    0 => [
        'tilte' => 'Туфли женские',
        'price' => 5000,
        'descr' => 'Туфли женские красивые',
    ],
    1 => [
        'tilte' => 'Туфли мужские',
        'price' => 3000,
        'descr' => 'Туфли мужские красивые',
    ],
    2 => [
        'tilte' => 'Туфли детские',
        'price' => 9000,
        'descr' => 'Туфли детские красивые',
    ],
];

echo 'Изучаем цикл While', '<br>';
$i = 0;
while ($i <= count($products) ) {
    $item = $products[$i];
    echo '<p>' . $item['tilte'] . '</p>';
    echo '<p>' . $item['price'] . '</p>';
    echo '<p>' . $item['descr'] . '</p>';
    $i++;
}

