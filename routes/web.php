<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\itemController;

Route::get('/', [itemController::class, 'index']);

Route::get('/hello', function () {
    return "<h1>hello world!</h1>";
});

Route::resource('items', itemController::class);

Route::resource('categories', categoryController::class);
