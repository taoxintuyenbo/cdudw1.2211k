<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;

use App\Http\Controllers\frontend\ContactController;
Route::get('/',[HomeController::Class,'index']);
Route::get('/product',[ProductController::Class,'index']);

Route::get('/product-detail/{slug}',[ProductController::Class,'product_detail']);

Route::get('/contact',[ContactController::Class,'index']);


