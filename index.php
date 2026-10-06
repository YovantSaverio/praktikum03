<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Cek status maintenance
if (file_exists($maintenance = __DIR__.'/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Autoloader Composer
require __DIR__.'/vendor/autoload.php';

// Menjalankan aplikasi Laravel
(require_once __DIR__.'/bootstrap/app.php')
    ->handleRequest(Request::capture());