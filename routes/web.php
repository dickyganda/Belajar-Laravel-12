<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('/products');
});

//route resource for products
Route::resource('/products', ProductController::class);
