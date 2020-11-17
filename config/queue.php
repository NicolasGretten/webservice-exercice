<?php

return [
    'default' => env('QUEUE_DRIVER', 'sync'),
    'connections' => [
        'database' => [
            'driver'        => 'database',
            'connection'    => 'data',
            'table'         => 'jobs_pending',
            'queue'         => 'default',
            'retry_after'   => 5,
        ],
        'subscriber' => [
            'driver'      => 'subscriber',
            'key'         => env('SUBSCRIBER_SQS_KEY'),
            'secret'      => env('SUBSCRIBER_SQS_SECRET'),
            'prefix'      => env('SUBSCRIBER_SQS_PREFIX'),
            'queue'       => env('SUBSCRIBER_SQS_QUEUE'),
            'region'      => env('SUBSCRIBER_SQS_REGION'),
            'retry_after' => 90,
        ],
    ],
    'failed' => [
        'database'  => 'data',
        'table'     => 'jobs_failed',
    ],
];
