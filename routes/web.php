<?php

use App\Http\Controllers\Auth\authController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Admin/index');
});

Route::get('/giris-yap', [authController::class, 'loginIndex'])->name('login.index');
Route::get('/kayit-ol', [authController::class, 'registerIndex'])->name('register.index');
Route::post('/kayit-ol', [authController::class, 'registerStore'])->name('register.store');



Route::get('/seed', function () {
    Artisan::call('migrate:fresh --seed');
    return "Artisan komutu başarıyla çalıştırıldı.";
});

Route::get('/migrate', function () {
    Artisan::call('migrate');
    return "Artisan komutu başarıyla çalıştırıldı.";
});
