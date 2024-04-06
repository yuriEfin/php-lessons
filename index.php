<?php

declare(strict_types=1);

use ObjectOriented\Classes\Abstraction\Parsing\NewsParser;

ini_set('display_errors', 'On');
error_reporting(E_ALL);

require __DIR__ . '/autoload.php';
require __DIR__ . '/dump.php';

$parser = new NewsParser();

$parser2 = clone $parser;
