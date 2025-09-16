<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('cliente');
});

Route::post('/cliente','App\Http\Controllers\ClienteController@store'); //cadastro
Route::get('/cliente','App\Http\Controllers\ClienteController@index'); //visualização