<?php

use App\Controllers\AboutController;
use App\Controllers\AuthController;
use App\Controllers\ContactController;
use App\Controllers\HomeController;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

return [
    'id'             => 'Web',
    'name'           => 'Web Application',
    'version'        => '0.1',
    'debug'          => $_ENV['APP_ENV'],
    'env'            => 'development',
    'controllerPath' => [
        [],
        [],
        [],
        [],
    ],
    'routes'         => [
        '/'        => [
            'handler' => HomeController::class . '@index',
            'methods' => ['GET'],
        ],
        '/about'   => [
            'handler' => AboutController::class . '@index',
            'methods' => ['GET'],
        ],
        '/contact' => [
            'handler' => ContactController::class . '@index',
            'methods' => ['GET'],
        ],
        '/auth'    => [
            'handler' => AuthController::class . '@index',
            'methods' => ['GET', 'POST'],
        ],
    ],
    'definitions'    => [
        Environment::class => function () {
            $loader = new FilesystemLoader(__DIR__ . '/Views');
            
            return new Environment(
                $loader,
                [
                    'cache' => false, // dirname(__DIR__, 2) . '/var/cache',
                ]
            );
        },
    ],
    'components'     => [
    ],
];
