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
    'cacheDriver' => 'file',
    'redisCacheConnection' => 'cache',
    'lockDriver' => 'file',
    'redisLockConnection' => 'lock',
    'twigOptions' => null,
    'diskConfigs' => config('storage.disks')
];