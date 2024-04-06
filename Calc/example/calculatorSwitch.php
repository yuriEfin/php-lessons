<?php
// переменная не объявлена явным образом именно в этом скрипте - в этом файле,
// но она объявлена выше того места где был подключен данный файл

$operations = ['plus', 'minus', 'division', 'multiple'];
$operations2 = ['plus', 'minus', 'division', 'multiple'];

// мы объявили переменные и присвоили в них значение с типом данных Целое число (integer)
$num1 = (int)($_GET['num1'] ?? 0);
$num2 = (int)($_GET['num2'] ?? 0);

$currentOperator = $_GET['operator'] ?? null;
$messageError = 'Введены некорректные данные';


$result = 0;

switch ($currentOperator) {
    case 'plus';
        $result = $num1 + $num2;
        break;
    case 'minus';
        if (($num1 < $num2)) {
            echo $messageError;
            
            die;
        }
        $result = $num1 - $num2;
        break;
    case 'division';
        if ($num2 == 0) {
            echo $messageError . '. Деление на 0 запрещено.';
            
            die;
        }
        $result = $num1 / $num2;
        break;
    case 'multiple';
        $result = $num1 * $num2;
        break;
    default:
        echo '<br>' . $messageError . '. Мы попали в блок ELSE';
        die('<br>-----------<br>');
}

echo '<br>Результат операции (function): ' . $result . ' <br><br><br>';

