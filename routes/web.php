<?php

use App\Http\Controllers\Auth\authController;
use App\Http\Controllers\CargoController;
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

//main routes

Route::get('/', function () {
    return view('index');
});

//auth routes
Route::middleware(['auth'])->group(function () {
    Route::prefix('kargo-gonderileri')->as('cargo.')->group(function () {
        Route::get('/', [CargoController::class, 'index'])->name('index');
        Route::get('/yeni-kargo', [CargoController::class, 'create'])->name('create');
        Route::post('/yeni-kargo', [CargoController::class, 'store'])->name('store');
        Route::get('/{cargo}/duzenle', [CargoController::class, 'edit'])->name('edit');
        Route::put('/{cargo}/duzenle', [CargoController::class, 'update'])->name('update');
        Route::get('/{cargo}', [CargoController::class, 'show'])->name('show');
        Route::delete('/{cargo}/kargo-sil', [CargoController::class, 'destroy'])->name('destroy');
    });
    Route::get('/cikis-yap', [authController::class, 'logout'])->name('login.destroy');
});

//guest routes
Route::middleware(['guest'])->group(function () {
    Route::get('/giris-yap', [authController::class, 'loginIndex'])->name('login.index');
    Route::post('/giris-yap', [authController::class, 'loginStore'])->name('login.store');
    Route::get('/kayit-ol', [authController::class, 'registerIndex'])->name('register.index');
    Route::post('/kayit-ol', [authController::class, 'registerStore'])->name('register.store');
});

Route::get('/seed', function () {
    Artisan::call('migrate:fresh --seed');
    return "Artisan komutu başarıyla çalıştırıldı.";
});

Route::get('/migrate', function () {
    Artisan::call('migrate');
    return "Artisan komutu başarıyla çalıştırıldı.";
});
