<?php

ini_set('display_errors', 'On');
ini_set('display_startup_errors', 'On');
error_reporting(E_ALL);

// однострочный комментарий

/**
 * 1. Калькулятор будет иметь 4 вида операции
 * - сложение
 * - вычитание
 * - умножение
 * - деление
 * 2. На вход программа будет принимать 2 числа с которыми будет производить выбранные вычисления
 * 3. На выходе программа будет выдавать результат вычисления
 * 4. В случае ошибки — программа будет выдавать сообщение «Введены некорректные данные»
 *
 * Условия:
 * - если выбран оператор сложения (+), то мы к первому числу прибавляем второе
 * - если выбран оператор вычитания (-), то мы от первого числа вычитаем второе
 * - если выбран оператор деления (/) то мы первое число делим на второе
 * - если выбран оператор умножения то мы первое число умножаем на второе
 * **** доп условия
 * - если введено первое значение 2 а второе значение 3, то есть первое значение меньше второго, и при этом выбран оператор вычитания,
 * - то надо выдать ошибку так как получится отрицательное число. И хотя в математике это норма, но наша программа допустим этого не разрешает.
 *
 * - или если первое значение введено 3, а второе значение 0, и выбран оператор / то надо тоже выдать ошибку — так как мы будем делить 3 на 0
 * а деление на 0 в математике запрещено.
 */

/*
  многострочный комментарий
  многострочный комментарий
  многострочный комментарий
*/

// мы объявили переменные и присвоили в них значение с типом данных Целое число (integer)
$num1 = (int)($_GET['num1'] ?? 0);
$num2 = (int)($_GET['num2'] ?? 0);
$currentOperator = $_GET['operator'] ?? null;

function calculator(string $operator, int $number1, int $number2, string $messageError = 'Введены некорректные данные'): array
{
    $operations = ['plus', 'minus', 'division', 'multiple'];
    
    $result = null;
    $errors = [];
    switch ($operator) {
        case 'plus';
            $result = $number1 + $number2;
            break;
        case 'minus';
            if (($number1 < $number2)) {
                $errors[] = $messageError;
            }
            $result = $number1 - $number2;
            break;
        case 'division';
            if ($number2 == 0) {
                $errors[] = $messageError . '. Деление на 0 запрещено.';
            }
            $result = $number1 / $number2;
            break;
        case 'multiple';
            $result = $number1 * $number2;
            break;
        default:
            $errors[] = '<br>' . $messageError . '. Мы попали в блок ELSE';
    }
    
    return [
        0 => $result,
        1 => $errors,
    ];
}

[$result, $errors] = calculator($currentOperator, $num1, $num2);

if ($errors) {
    echo 'Произошла ошибка<br/>';
    foreach ($errors as $error) {
        echo '<br>Ошибка: ' . $error . ' <br><br><br>';
    }
} else {
    echo '<br>Результат операции (function): ' . ($result) . ' <br><br><br>';
}

//echo '<pre/>';
//var_dump($result2);
