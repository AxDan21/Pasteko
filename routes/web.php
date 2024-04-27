<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/login', "auth.login")->name('login');
Route::view('/registro', "auth.register")->name('registro');
Route::view('/home', "home")->name('home');

Route::post('/validar-registro', [App\Http\Controllers\LoginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [App\Http\Controllers\LoginController::class, 'login'])->name('inicia-sesion');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');