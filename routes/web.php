<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\itemController;
use App\Http\Controllers\userController;
use App\Http\Middleware\UserMiddleware;

Route::get('/', function () {
    return view('homepage.home');
})->name('home');

Route::resource('items', itemController::class)/*->middleware(UserMiddleware::class)*/;

Route::resource('categories', categoryController::class);

Route::resource('users', userController::class);


Route::middleware('guest')->controller(AuthController::class)->group(function () {
    Route::get('/register', 'showRegister')->name('show.register');
    Route::get('/login',  'showLogin')->name('show.login');
    Route::post('/register', 'register')->name('register');
    Route::post('/login',  'login')->name('login');

});
Route::post('/logout',  [AuthController::class,'logout'])->name('logout');
