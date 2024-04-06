<?php

// Функция автозагрузки классов
function autoloader($className): void
{
    $className = str_replace('Calc\\', '', $className);
    require __DIR__ . '/Calc/' . $className . '.php';
}

// Регистрируем функцию автозагрузки
spl_autoload_register('autoloader');
