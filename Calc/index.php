<?php

include __DIR__ . '/autoload.php';

use Calc\Calculator;
use Calc\Human;

ini_set('display_errors', 'On');
error_reporting(E_ALL);

$num1 = (int)($_GET['num1'] ?? 0);
$num2 = (int)($_GET['num2'] ?? 0);
$currentOperator = $_GET['operator'] ?? null;

$calculator = new Calculator(
    $currentOperator,
    $num1,
    $num2
);

$calculator->calculate();

echo '<pre/>';

foreach ($calculator->getErrors() as $error) {
    echo '<p>' . $error . '</p>';
}


var_dump($GLOBALS);













