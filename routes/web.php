<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerItem;
use App\Http\Controllers\PenjualanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/katalog', [controllerItem::class, 'index']);
Route::get('/karyawan', [controllerItem::class, 'karyawan']);
Route::get('/supplier', [controllerItem::class, 'supplier']);

// praktikum
Route::get('/katalogpraktikum', [PenjualanController::class, 'katalog']);