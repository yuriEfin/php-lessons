<?php

use App\Command\ReportCommand;
use App\Component\QueryBuilder;
use App\Component\QueryBuilderInterface;

return [
    'appName'     => 'CLI',
    'commands'    => [
        ReportCommand::class,
    ],
    'definitions' => [
        QueryBuilderInterface::class => fn() => new QueryBuilder(),
    ],
];
