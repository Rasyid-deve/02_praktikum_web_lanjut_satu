<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    echo "Selamat Datang";
});

Route::get('/about', function () {
    echo "1941720177 - Rasyed Renaldi";
});

Route::get('/articles/{id}', function ($id) {
    echo "Halaman Artikel dengan ID ".$id;
});
