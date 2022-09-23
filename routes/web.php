<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => ''], function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/products', [ProductsController::class, 'loadproducts']);
    Route::get('/singleproduct/{id}', [ProductsController::class, 'loadsingleproduct']);
    Route::get('/aboutus', [HomeController::class, 'aboutus']);
    Route::get('/contact', [HomeController::class, 'contact']);
    Route::post('/review/create/{productId}', [ProductsController::class, 'createreview']);
    
});

Route::group(['prefix' => '/products'], function () {
    Route::get('/getsearch', [SearchController::class, 'getsearch']);
    Route::post('/getsearchajax', [SearchController::class, 'getsearchajax'])->name('getsearchajax');
});
