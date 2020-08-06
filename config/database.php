<?php
return [
    'default' => 'data',
    'migrations' => 'migrations',
    'connections' => [
        'data' => [
            'driver'    => 'pgsql',
            'host'      => env('DB1_HOST'),
            'port'      => env('DB1_PORT'),
            'database'  => env('DB1_DATABASE'),
            'username'  => env('DB1_USERNAME'),
            'password'  => env('DB1_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'strict'    => false,
        ],
        'common' => [
            'driver'    => 'pgsql',
            'host'      => env('DB2_HOST'),
            'port'      => env('DB2_PORT'),
            'database'  => env('DB2_DATABASE'),
            'username'  => env('DB2_USERNAME'),
            'password'  => env('DB2_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'strict'    => false,
        ],
    ],
];
