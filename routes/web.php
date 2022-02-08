<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;


// route for home page 
Route::get('/', [ProjectController::class, 'index'])->name('home');

// Single route when access without id
Route::get('/single_product', function () {
  return redirect('/');
});

// route for Product detail page
Route::get('/single_product/{id}', [ProjectController::class, 'single_product'])->name('single_product');

// route for display all product page
Route::get('/products', [ProjectController::class, 'products'])->name('products');



Route::get('/about', function () {
  return view('about');
});
