<?php

return [
    'subscribers' => [
        \App\Subscribers\CheckFieldSubscriber::class                    => env('PUBLISHER_SNS_PREFIX') . ':check_field',
        \App\Subscribers\ConfirmFieldSubscriber::class                  => env('PUBLISHER_SNS_PREFIX') . ':confirm_field',
     ],
];
