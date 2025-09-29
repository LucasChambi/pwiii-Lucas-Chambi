<?php
// ...existing code...
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/teste', function () {
    return view('teste');
});
Route::post('/welcome', [LoginController::class, 'authenticate'])->name('login.authenticate');
// ...existing code...