<?php

use Procket\Framework\Middleware\StartSession;

return [
    'debug' => env('APP_DEBUG', true),
    'multipleGroups' => false,
    'locale' => 'en',
    'fallbackLocale' => null,
    'routeName' => 'route',
    'middleware' => [
        StartSession::class
    ],
    'defaultGroup' => 'Home',
    'defaultService' => 'Index',
    'defaultAction' => 'index',
    'defaultDbConnection' => 'default',
    'dbConnections' => config('database.connections'),
    'defaultRedisConnection' => 'default',
    'redisConnections' => config('redis.connections'),
    'cacheDriver' => env('CACHE_DRIVER', 'file'),
    'redisCacheConnection' => 'cache',
    'lockDriver' => env('LOCK_DRIVER', 'file'),
    'redisLockConnection' => 'lock',
    'sessionDriver' => env('SESSION_DRIVER', 'file'),
    'redisSessionConnection' => 'session',
    'twigOptions' => null,
    'diskConfigs' => config('storage.disks')
];