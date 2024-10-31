<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoggerController;
Route::controller(LoggerController::class)->group(function () {
    Route::get('/log', 'log');
    Route::get('/log/all', 'logToAll');
    Route::get('/log/{to}', 'logTo');
});
