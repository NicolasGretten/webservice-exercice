<?php

return [
    'default' => env('QUEUE_DRIVER', env('QUEUE_DRIVER')),
    'connections' => [
        'database' => [
            'driver' => 'database',
            'connection' => 'common',
            'table' => 'jobs_pending',
            'queue' => 'default',
            'retry_after' => 90,
        ],
    ],
    'failed' => [
        'database' => 'common',
        'table' => 'jobs_failed',
    ],
];
