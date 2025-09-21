<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\FontentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FontentController::class, "fontend"]);


Route::resource('brand', BrandController::class);
