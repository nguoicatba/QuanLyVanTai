<?php

use App\Http\Controllers\HangVanTaiController;
use App\Http\Controllers\ShipperController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('main');
});

// change language
Route::get('lang/{locale}', [HomeController::class, 'switchLang'])->name('lang.switch');


Route::prefix('danhmuc')->group(function () {
    Route::prefix('hangvantai')->group(function () {
        Route::get('/', [HangVanTaiController::class, 'index'])->name('carrier.index');
        Route::get('/create', [HangVanTaiController::class, 'create'])->name('carrier.create');
        Route::post('/store', [HangVanTaiController::class, 'store'])->name('carrier.store');


    });

    Route::prefix('shipper')->controller(ShipperController::class)->group(function () {
        Route::get('/', 'index')->name('shipper.index');
        Route::get('/create', 'create')->name('shipper.create');
        Route::post('/store', 'store')->name('shipper.store');
    });

});
