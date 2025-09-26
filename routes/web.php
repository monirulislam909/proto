<?php

use App\Models\Gallery;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\FontentController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', [FontentController::class, "fontend"]);


Route::resource('brand', BrandController::class);
Route::resource('tag', TagController::class);
Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);
Route::resource('gallery', GalleryController::class);
