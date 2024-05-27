<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ContactController;

use App\Http\Controllers\backend\AdminHomeController;

 
Route::get('/',[HomeController::Class,'index'])->name('site.home');
Route::get('/product',[ProductController::Class,'index'])->name('site.product');;

Route::get('/product-detail/{slug}',[ProductController::Class,'product_detail'])->name('site.product.detail');;

Route::get('/contact',[ContactController::Class,'index'])->name('site.contact');;


Route::get('/admin',[AdminHomeController::Class,'index'])->name('admin.home');
