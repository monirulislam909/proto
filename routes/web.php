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

Route::get('shop', [FontentController::class, "fontend"])->name('shop.product');
Route::get('shop/{slug}', [FontentController::class, "single_product"])->name('single.product');
Route::get('category/{slug}', [FontentController::class, "fontend"])->name('category.product');
Route::get('tag/{slug}', [FontentController::class, "fontend"])->name('tag.product');


Route::resource('brand', BrandController::class);
Route::resource('tag', TagController::class);
Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);
Route::resource('gallery', GalleryController::class);
