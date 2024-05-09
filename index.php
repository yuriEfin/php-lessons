<?php

declare(strict_types=1);
$config = require __DIR__ . '/config.php';

if ($config['debug']) {
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);
}

require __DIR__ . '/autoload.php';
require __DIR__ . '/dump.php';

(new Application($config))->handleRequest();
