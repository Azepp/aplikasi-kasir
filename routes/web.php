<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/inventaris', function () {
    return view('inventaris');
});

Route::get('/tambah-barang', function () {
    return view('tambah-barang');
});

Route::get('/kasir', function () {
    return view('kasir');
});
