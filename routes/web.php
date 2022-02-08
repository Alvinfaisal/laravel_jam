<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;



Route::get('/', [ProjectController::class, 'index'])->name('home');

Route::get('/single_product', function () {
  return view('single_product');
});


Route::get('/products', function () {
  return view('products');
});

Route::get('/about', function () {
  return view('about');
});
