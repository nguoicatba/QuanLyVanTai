<?php

use App\Http\Controllers\HangVanTaiController;
use App\Http\Controllers\ShipperController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\Auth\AuthController;

use App\Http\Middleware\LocaleMiddleware;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// change language
Route::get('lang/{locale}', [HomeController::class, 'switchLang'])->name('lang.switch');
Route::get('lang', function () {
    dd(config('app.locale'));
})->middleware(LocaleMiddleware::class);

Route::get('/', [HomeController::class, 'index'])->name('home.index');




// Authentication routes
Route::get('/login', [AuthController::class, 'ShowLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'Login'])->name('login.post');
Route::get('/register', [AuthController::class, 'RegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::get('/logout', [AuthController::class, 'Logout'])->name('logout');



Route::middleware([LocaleMiddleware::class])->group(function () {
    Route::prefix('danhmuc')->group(function () {

        Route::prefix('shipper')->controller(ShipperController::class)
            ->group(function () {
                Route::get('/', 'index')->name('shipper.index');
                Route::get('/create', 'create')->name('shipper.create');
                Route::post('/store', 'store')->name('shipper.store');
                Route::get('/edit/{shipper}', 'edit')->name('shipper.edit');
                Route::put('/update/{shipper}', 'update')->name('shipper.update');
                Route::delete('/delete/{shipper}', 'destroy')->name('shipper.destroy');
                Route::get('/export', 'export')->name('shipper.export');
            });

        Route::prefix('employee')->controller(EmployeeController::class)->group(function () {
            Route::get('/', 'index')->name('employee.index');
            Route::get('/create', 'create')->name('employee.create');
            Route::post('/store', 'store')->name('employee.store');
            Route::get('/edit/{employee}', 'edit')->name('employee.edit');
            Route::put('/update/{employee}', 'update')->name('employee.update');
            Route::delete('/delete/{employee}', 'destroy')->name('employee.destroy');
        });

        Route::prefix('position')->controller(PositionController::class)->group(function () {
            Route::get('/', 'index')->name('position.index');
            Route::get('/create', 'create')->name('position.create');
            Route::post('/store', 'store')->name('position.store');
            Route::get('/edit/{position}', 'edit')->name('position.edit');
            Route::put('/update/{position}', 'update')->name('position.update');
            Route::delete('/delete/{position}', 'destroy')->name('position.destroy');


        });

    });

});