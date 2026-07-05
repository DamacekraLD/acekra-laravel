<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

if (!is_dir(storage_path('framework/cache'))) {
    mkdir(storage_path('framework/cache'), 0777, true);
}

if (!is_dir(storage_path('framework/views'))) {
    mkdir(storage_path('framework/views'), 0777, true);
}

if (!is_dir(storage_path('framework/sessions'))) {
    mkdir(storage_path('framework/sessions'), 0777, true);
}

$app->handleRequest(Request::capture());