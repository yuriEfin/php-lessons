<?php

// Функция автозагрузки классов
function autoloader($className): void
{
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    require __DIR__ . '/' . $className . '.php';
}

// Регистрируем функцию автозагрузки
spl_autoload_register('autoloader');
