<?php


use App\Http\Controllers\Admin\ShipperController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\PositionController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\ItemTypeController;
use App\Http\Controllers\Admin\CurrencyController;

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
                // uu tien dung resource
                Route::resource('shipper', ShipperController::class);
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

        Route::resource('position', PositionController::class);

        Route::resource('itemtype', ItemTypeController::class);

        Route::resource('currency', CurrencyController::class);

    });

});
