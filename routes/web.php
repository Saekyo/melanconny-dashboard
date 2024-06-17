<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
Route::get('/', function () {
    return view('login');
});

Route::post('/login', [AuthController::class, 'login'])->name('api.login');

Route::get('/category', function () {
    return view('category');
})->name('category');
