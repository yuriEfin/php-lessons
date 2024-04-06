<?php

$operations = ['plus', 'minus', 'division', 'multiple'];
// мы объявили переменные и присвоили в них значение с типом данных Целое число (integer)
$num1 = (int)($_GET['num1'] ?? 0);
$num2 = (int)($_GET['num2'] ?? 0);

$currentOperator = $_GET['operator'] ?? null;
$messageError = 'Введены некорректные данные';

$result = match ($currentOperator) {
    'plus' => $num1 + $num2,
    'minus' => $num1 - $num2,
    'division' => $num1 / $num2,
    'multiple' => $num1 * $num2,
    default => 0
};

echo '<br>Результат операции (function): ' . $result;
