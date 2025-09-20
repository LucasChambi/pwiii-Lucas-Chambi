<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rota para a view teste.blade.php
Route::get('/teste', function () {
    return view('teste');
});
