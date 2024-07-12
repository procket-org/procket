<?php

use Procket\Framework\Procket;

if (!defined('APP_BASE_PATH')) {
    /**
     * Application base path
     */
    define('APP_BASE_PATH', __DIR__ . '/..');
}

require __DIR__ . '/../vendor/autoload.php';

Procket::instance()->run();