<?php
return [
    'default' => 'data',
    'migrations' => 'migrations',
    'connections' => [
        'data' => [
            'driver'    => env('DB1_DRIVER'),
            'host'      => env('DB1_HOST'),
            'port'      => env('DB1_PORT'),
            'database'  => env('DB1_DATABASE'),
            'username'  => env('DB1_USERNAME'),
            'password'  => env('DB1_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'strict'    => false,
        ]
    ],
];
