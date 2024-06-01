<?php

declare(strict_types=1);

use App\Application;
use Symfony\Component\Dotenv\Dotenv;

ini_set('display_errors', 'On');
error_reporting(E_ALL | E_NOTICE);

require __DIR__ . '/vendor/autoload.php';

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');

$config = require __DIR__ . '/config.php';

(new Application($config))->handleRequest();
