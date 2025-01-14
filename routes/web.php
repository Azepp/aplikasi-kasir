<?php

use App\Http\Controllers\AuthController;
use App\Http\Middleware\AuthenticatedUserMiddleware;
use App\Http\Middleware\IsAuthenticatedMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware([IsAuthenticatedMiddleware::class])->group(
    function () {
        Route::prefix('auth')->group(function () {
            Route::get('/login', [AuthController::class, 'loginView'])->name('login-page');
            Route::post('/process-login', [AuthController::class, 'login'])->name('post-login');
        });
    });

Route::middleware([AuthenticatedUserMiddleware::class])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/', function () {
        return view('index');
    })->name('dashboard');

    Route::get('/inventaris', function () {
        return view('inventaris.inventaris');
    });

    Route::get('/inventaris/tambah-barang', function () {
        return view('inventaris.tambah-barang');
    });

    Route::get('/inventaris/edit-barang', function () {
        return view('inventaris.edit-barang');
    });

    Route::get('/kasir', function () {
        return view('kasir');
    });

    Route::get('/riwayat', function () {
        return view('riwayat');
    });

    Route::get('/pengaturan', function () {
        return view('pengaturan');
    });
});
