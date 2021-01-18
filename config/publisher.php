<?php

return [
    'sns' => [
        'key'    => env('PUBLISHER_SNS_KEY'),
        'secret' => env('PUBLISHER_SNS_SECRET'),
        'region' => env('PUBLISHER_SNS_REGION'),
    ],
    'events' => [
        'confirm_field'                                 => env('PUBLISHER_SNS_PREFIX'). ':confirm_field',
        'check_field'                                   => env('PUBLISHER_SNS_PREFIX'). ':check_field'
    ]
];
