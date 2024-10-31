<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoggerController;

Route::get('/log', [LoggerController::class, 'log']);
Route::get('/log/all', [LoggerController::class, 'logToAll']);
Route::get('/log/{to}', [LoggerController::class, 'logTo']);
