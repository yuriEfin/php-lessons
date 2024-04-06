<?php

$operations = ['plus', 'minus', 'division', 'multiple'];
// мы объявили переменные и присвоили в них значение с типом данных Целое число (integer)
$num1 = (int)($_GET['num1'] ?? 0);
$num2 = (int)($_GET['num2'] ?? 0);

$currentOperator = $_GET['operator'] ?? null;
$messageError = 'Введены некорректные данные';

$result = 0;
if ($currentOperator == 'plus') {
    $result = $num1 + $num2;
}
if ($currentOperator == 'minus') {
    if ($num1 < $num2) {
        echo $messageError;
        
        die;
    }
    $result = $num1 - $num2;
}
if ($currentOperator == 'division') {
    if ($num2 == 0) {
        echo $messageError . '. Деление на 0 запрещено.';
        
        die;
    }
    $result = $num1 / $num2;
}
if ($currentOperator == 'multiple') {
    $result = $num1 * $num2;
}

echo '<br>Результат операции (function): ' . $result;
