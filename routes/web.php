<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AirportController,
};

Route::prefix('airports')->group(function() {
    Route::get('/', [AirportController::class, 'getAll']);
    Route::get('/{id}', [AirportController::class, 'getById']);
    Route::post('/', [AirportController::class, 'create']);
    Route::patch('/{id}', [AirportController::class, 'update']);
    Route::delete('/{id}', [AirportController::class, 'delete']);
});

Route::get('/', function () {
    return view('welcome');
});
