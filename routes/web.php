<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('/category')->group(function(){
    Route::get('/createPage',[CategoryController::class, 'createPage'])->name('category.createPage');
    Route::post('/create',[CategoryController::class,'create'])->name('category.create');
    Route::get('/list',[CategoryController::class, 'list'])->name('category.list');
});

Route::prefix('/products')->group(function () {
    Route::get('/list',[ProductController::class,'list'])->name('product.list'); 
    Route::get('/createProductPage',[ProductController::class,'createProduct'])->name('product.createProduct'); 
    Route::get('/createProduct/{product}/detail',[ProductController::class,'createProductDetail'])->name('product.createProductDetail'); 
    Route::post('/createProduct',[ProductController::class,'create'])->name('product.create');
    Route::post('/createProduct/{product}/detail',[ProductController::class,'createDetail'])->name('product.createDetail');
    //images
    Route::get('/createProduct/{productId}/images',[ProductController::class,'createProductImagePage'])->name('product.createProductImagePage');
    Route::post('/createProduct/{productId}/images',[ProductController::class,'createProductImages'])->name('product.createProductImage');
    Route::get('/detail/{product}',[ProductController::class,'detail'])->name('product.detail');
});