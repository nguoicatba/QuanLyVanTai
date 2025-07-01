<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PositionController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('position')->group(function () {
        Route::get('/get', [PositionController::class, 'PositionGet'])->name('api.position.get');
});
