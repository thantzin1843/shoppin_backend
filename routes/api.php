<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('products', function () {
        $product = Product::with(['details', 'images'])->get();
        return response()->json($product);
});

Route::get('products/{id}', function ($id) {
        $product = Product::with(['details', 'images'])->where('id',$id)->get();
        return response()->json($product);
});

