<?php

return [
    'connections' => [
        'default' => [
            'parameters' => [
                'host' => env('REDIS_HOST', '127.0.0.1'),
                'port' => env('REDIS_PORT', '6379'),
                'username' => env('REDIS_USERNAME'),
                'password' => env('REDIS_PASSWORD'),
                'database' => env('REDIS_DB', '0'),
            ],
            'options' => [
                'prefix' => 'procket_database:'
            ]
        ],
        'cache' => [
            'parameters' => [
                'host' => env('REDIS_HOST', '127.0.0.1'),
                'port' => env('REDIS_PORT', '6379'),
                'username' => env('REDIS_USERNAME'),
                'password' => env('REDIS_PASSWORD'),
                'database' => env('REDIS_CACHE_DB', '1'),
            ],
            'options' => [
                'prefix' => 'procket_cache:'
            ]
        ],
        'lock' => [
            'parameters' => [
                'host' => env('REDIS_HOST', '127.0.0.1'),
                'port' => env('REDIS_PORT', '6379'),
                'username' => env('REDIS_USERNAME'),
                'password' => env('REDIS_PASSWORD'),
                'database' => env('REDIS_LOCK_DB', '2'),
            ],
            'options' => [
                'prefix' => 'procket_lock:'
            ]
        ]
    ]
];