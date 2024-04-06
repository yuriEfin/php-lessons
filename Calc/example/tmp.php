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
        'title' => 'Туфли женские',
        'price' => 5000,
        'descr' => 'Туфли женские красивые',
    ],
    1 => [
        'title' => 'Туфли мужские',
        'price' => 3000,
        'descr' => 'Туфли мужские красивые',
    ],
    2 => [
        'title' => 'Туфли детские',
        'price' => 9000,
        'descr' => 'Туфли детские красивые',
    ],
    3 => [
        'title' => 'index = 3  Туфли детские',
        'price' => 12000,
        'descr' => 'index = 3 Туфли детские красивые',
    ],
];

echo 'Изучаем цикл While', '<br>';

//$counter = 0;
//$countProducts = (count($products) - 1);
//for (; $counter <= $countProducts; $counter++) {
//    $product = $products[$counter];
//
//    echo '<p>' . $product['title'] . '</p>';
//    echo '<p>' . $product['price'] . '</p>';
//    echo '<p>' . $product['descr'] . '</p>';
//    echo '<hr>';
//}


foreach ($products as $key => $product) {
    foreach ($product as $label => $value) {
        if ($product['price'] > 5000) {
            echo 'key break = ' . $key . '<br>';
            break 2;
        }
        echo 'key = ' . $key . '<br>';
        echo '<p>' . $product['title'] . '</p>';
        echo '<p>' . $product['price'] . '</p>';
        echo '<p>' . $product['descr'] . '</p>';
        echo '<hr>';
    }
}


// $countProducts = count($products);
// $counter = 0;
//do {
//    $product = $products[$counter];
//
//    if ($product['price'] < 5000) {
//        $counter++;
//        continue;
//    }
//
//    echo '<p>' . $product['title'] . '</p>';
//    echo '<p>' . $product['price'] . '</p>';
//    echo '<p>' . $product['descr'] . '</p>';
//    echo '<hr>';
//    $counter++;
//} while ($counter <= ($countProducts - 1));


//$operations = ['plus', 'minus', 'division', 'multiple'];
//// мы объявили переменные и присвоили в них значение с типом данных Целое число (integer)
//$num1 = (int)($_GET['num1'] ?? 0);
//$num2 = (int)($_GET['num2'] ?? 0);
//
//$currentOperator = $_GET['operator'] ?? null;
//$messageError = 'Введены некорректные данные';
//
//$result = match ($currentOperator) {
//    'plus' => $num1 + $num2,
//    'minus' => $num1 - $num2,
//    'division' => $num1 / $num2,
//    'multiple' => $num1 * $num2,
//};

//switch ($currentOperator) {
//    case 'plus':
//        $result = $num1 + $num2;
//        echo 'plus<br>';
//    case 'minus':
//        if ($num1 < $num2) {
//            echo $messageError;
//
//            die;
//        }
//        $result = $num1 - $num2;
//        echo 'minus<br>';
//        break;
//    case 'division':
//        if ($num2 == 0) {
//            echo $messageError . '. Деление на 0 запрещено.';
//
//            die;
//        }
//        echo 'division<br>';
//        $result = $num1 / $num2;
//    case 'multiple':
//        echo 'multiple<br>';
//        $result = $num1 * $num2;
//    default:
//        echo $messageError . '. ELSE...';
//        die;
//}

// if ($currentOperator == 'plus') {
//     $result = $num1 + $num2;
// } elseif ($currentOperator == 'minus') {
//     if ($num1 < $num2) {
//         echo $messageError;
//
//         die;
//     }
//     $result = $num1 - $num2;
// } elseif ($currentOperator == 'division') {
//     if ($num2 == 0) {
//         echo $messageError . '. Деление на 0 запрещено.';
//
//         die;
//     }
//     $result = $num1 / $num2;
// } elseif ($currentOperator == 'multiple') {
//     $result = $num1 * $num2;
// } else {
//     echo $messageError . '. Сработал блок с управляющей конструкцией ELSE';
//
//     die;
// }

//echo '<br>Результат операции (function): ' . $result;
