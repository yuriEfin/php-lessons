<?php

return [
    'id'         => 'Web',
    'name'       => 'Web Application',
    'version'    => '0.1',
    'debug'      => true,
    'env'        => 'development',
    'routes'     => [
        '/'        => 'HomeController@index',
        '/about'   => 'AboutController@index',
        '/contact' => 'ContactController@index',
        '/auth'    => 'AuthController@index',
    ],
    'components' => [
    ],
];
