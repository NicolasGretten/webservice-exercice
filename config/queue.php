<?php

return [
    'default' => env('QUEUE_DRIVER', 'sync'),
    'connections' => [
        'database' => [
            'driver' => 'database',
            'connection' => 'common',
            'table' => 'jobs_pending',
            'queue' => 'default',
            'retry_after' => 5,
        ],
    ],
    'failed' => [
        'database' => 'common',
        'table' => 'jobs_failed',
    ],
];
