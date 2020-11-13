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
        'sqs' => [
            'driver' => 'sqs',
            'key'    => env('SQS_KEY'),
            'secret' => env('SQS_SECRET'),
            'queue'  => env('SQS_QUEUE'),
            'region' => env('SQS_REGION'),
        ]
    ],
    'failed' => [
        'database' => 'common',
        'table' => 'jobs_failed',
    ],
];
