<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\FilterController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => ''], function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/products', [ProductsController::class, 'loadproducts']);
    Route::get('/singleproduct/{id}', [ProductsController::class, 'loadsingleproduct']);
    Route::get('/aboutus', [HomeController::class, 'aboutus']);
    Route::get('/contact', [HomeController::class, 'contact']);
    Route::post('/review/create/{productId}', [ProductsController::class, 'createreview']);

    Route::get('/getProductQuickView', [ProductsController::class, 'getProductQuickView']);
});

Route::group(['prefix' => '/filter'], function () {

    Route::get('/getsearchajax', [FilterController::class, 'getsearchajax']);
    Route::get('/getcategoryajax', [FilterController::class, 'getcategoryajax']);
    Route::get('/getpriceajax', [FilterController::class, 'getpriceajax']);
    Route::get('/clearfilterajax', [FilterController::class, 'clearfilterajax']);
});
