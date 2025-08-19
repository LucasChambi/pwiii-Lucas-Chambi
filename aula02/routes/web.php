<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return view('teste');
});

/* Route::get('/sua-rota', function () {
    return view('arquivo.blade.php');
});
*/