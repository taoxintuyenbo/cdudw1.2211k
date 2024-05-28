<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController as FrontendProductController;
use App\Http\Controllers\frontend\ContactController as FrontendContactController;

use App\Http\Controllers\backend\AdminHomeController;
use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ContactController as BackendContactController;
use App\Http\Controllers\backend\MenuController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\OrderdetailController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\ProductController as BackendProductController;
use App\Http\Controllers\backend\TopicController;
use App\Http\Controllers\backend\UserController;



 
Route::get('/',[HomeController::Class,'index'])->name('site.home');
Route::get('/product',[FrontendProductController::Class,'index'])->name('site.product');;

Route::get('/product-detail/{slug}',[FrontendProductController::Class,'product_detail'])->name('site.product.detail');;

Route::get('/contact',[FrontendContactController::Class,'index'])->name('site.contact');;


//product

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('admin.dashboard.index');
    //product
    Route::prefix('product')->group(function () {
        Route::get('/', [BackendProductController::class, 'index'])->name('admin.product.index');
        Route::get('trash', [BackendProductController::class, 'trash'])->name('admin.product.trash');
        Route::get('show/{id}', [BackendProductController::class, 'show'])->name('admin.product.show');
        Route::get('create', [BackendProductController::class, 'create'])->name('admin.product.create');
        Route::get('store', [BackendProductController::class, 'store'])->name('admin.product.store');
        Route::get('edit/{id}', [BackendProductController::class, 'edit'])->name('admin.product.edit');
        Route::get('update/{id}', [BackendProductController::class, 'update'])->name('admin.product.update');
        Route::get('delete/{id}', [BackendProductController::class, 'delete'])->name('admin.product.delete');
        Route::get('restore/{id}', [BackendProductController::class,'restore'])->name('admin.product.restore');
        Route::get('destroy/{id}', [BackendProductController::class, 'destroy'])->name('admin.product.destroy');
    });
    
    //category
    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('trash', [CategoryController::class, 'trash'])->name('admin.category.trash');
        Route::get('show/{id}', [CategoryController::class, 'show'])->name('admin.category.show');
        Route::get('create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::get('store', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::get('update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');
        Route::get('restore/{id}', [CategoryController::class,'restore'])->name('admin.category.restore');
        Route::get('destroy/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
    });
    //banner
    Route::prefix('banner')->group(function () {
        Route::get('/', [BannerController::class, 'index'])->name('admin.banner.index');
        Route::get('trash', [BannerController::class, 'trash'])->name('admin.banner.trash');
        Route::get('show/{id}', [BannerController::class, 'show'])->name('admin.banner.show');
        Route::get('create', [BannerController::class, 'create'])->name('admin.banner.create');
        Route::get('store', [BannerController::class, 'store'])->name('admin.banner.store');
        Route::get('edit/{id}', [BannerController::class, 'edit'])->name('admin.banner.edit');
        Route::get('update/{id}', [BannerController::class, 'update'])->name('admin.banner.update');
        Route::get('delete/{id}', [BannerController::class, 'delete'])->name('admin.banner.delete');
        Route::get('restore/{id}', [BannerController::class,'restore'])->name('admin.banner.restore');
        Route::get('destroy/{id}', [BannerController::class, 'destroy'])->name('admin.banner.destroy');
    });

    //brand
    Route::prefix('brand')->group(function () {
        Route::get('/', [BrandController::class, 'index'])->name('admin.brand.index');
        Route::get('trash', [BrandController::class, 'trash'])->name('admin.brand.trash');
        Route::get('show/{id}', [BrandController::class, 'show'])->name('admin.brand.show');
        Route::get('create', [BrandController::class, 'create'])->name('admin.brand.create');
        Route::get('store', [BrandController::class, 'store'])->name('admin.brand.store');
        Route::get('edit/{id}', [BrandController::class, 'edit'])->name('admin.brand.edit');
        Route::get('update/{id}', [BrandController::class, 'update'])->name('admin.brand.update');
        Route::get('delete/{id}', [BrandController::class, 'delete'])->name('admin.brand.delete');
        Route::get('restore/{id}', [BrandController::class,'restore'])->name('admin.brand.restore');
        Route::get('destroy/{id}', [BrandController::class, 'destroy'])->name('admin.brand.destroy');
    });

    //contact
    Route::prefix('contact')->group(function () {
        Route::get('/', [BackendContactController::class, 'index'])->name('admin.contact.index');
        Route::get('trash', [BackendContactController::class, 'trash'])->name('admin.contact.trash');
        Route::get('show/{id}', [BackendContactController::class, 'show'])->name('admin.contact.show');
        Route::get('create', [BackendContactController::class, 'create'])->name('admin.contact.create');
        Route::get('store', [BackendContactController::class, 'store'])->name('admin.contact.store');
        Route::get('edit/{id}', [BackendContactController::class, 'edit'])->name('admin.contact.edit');
        Route::get('update/{id}', [BackendContactController::class, 'update'])->name('admin.contact.update');
        Route::get('delete/{id}', [BackendContactController::class, 'delete'])->name('admin.contact.delete');
        Route::get('restore/{id}', [BackendContactController::class,'restore'])->name('admin.contact.restore');
        Route::get('destroy/{id}', [BackendContactController::class, 'destroy'])->name('admin.contact.destroy');
    });

     //menu 
     Route::prefix('menu')->group(function () {
        Route::get('/', [MenuController::class, 'index'])->name('admin.menu.index');
        Route::get('trash', [MenuController::class, 'trash'])->name('admin.menu.trash');
        Route::get('show/{id}', [MenuController::class, 'show'])->name('admin.menu.show');
        Route::get('create', [MenuController::class, 'create'])->name('admin.menu.create');
        Route::get('store', [MenuController::class, 'store'])->name('admin.menu.store');
        Route::get('edit/{id}', [MenuController::class, 'edit'])->name('admin.menu.edit');
        Route::get('update/{id}', [MenuController::class, 'update'])->name('admin.menu.update');
        Route::get('delete/{id}', [MenuController::class, 'delete'])->name('admin.menu.delete');
        Route::get('restore/{id}', [MenuController::class,'restore'])->name('admin.menu.restore');
        Route::get('destroy/{id}', [MenuController::class, 'destroy'])->name('admin.menu.destroy');
    });

    //order
    Route::prefix('order')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('admin.order.index');
        Route::get('trash', [OrderController::class, 'trash'])->name('admin.order.trash');
        Route::get('show/{id}', [OrderController::class, 'show'])->name('admin.order.show');
        Route::get('create', [OrderController::class, 'create'])->name('admin.order.create');
        Route::get('store', [OrderController::class, 'store'])->name('admin.order.store');
        Route::get('edit/{id}', [OrderController::class, 'edit'])->name('admin.order.edit');
        Route::get('update/{id}', [OrderController::class, 'update'])->name('admin.order.update');
        Route::get('delete/{id}', [OrderController::class, 'delete'])->name('admin.order.delete');
        Route::get('restore/{id}', [OrderController::class,'restore'])->name('admin.order.restore');
        Route::get('destroy/{id}', [OrderController::class, 'destroy'])->name('admin.order.destroy');
    });

       //orderdetail 
    Route::prefix('orderdetail')->group(function () {
        Route::get('/', [OrderdetailController::class, 'index'])->name('admin.orderdetail.index');
        Route::get('trash', [OrderdetailController::class, 'trash'])->name('admin.orderdetail.trash');
        Route::get('show/{id}', [OrderdetailController::class, 'show'])->name('admin.orderdetail.show');
        Route::get('create', [OrderdetailController::class, 'create'])->name('admin.orderdetail.create');
        Route::get('store', [OrderdetailController::class, 'store'])->name('admin.orderdetail.store');
        Route::get('edit/{id}', [OrderdetailController::class, 'edit'])->name('admin.orderdetail.edit');
        Route::get('update/{id}', [OrderdetailController::class, 'update'])->name('admin.orderdetail.update');
        Route::get('delete/{id}', [OrderdetailController::class, 'delete'])->name('admin.orderdetail.delete');
        Route::get('restore/{id}', [OrderdetailController::class,'restore'])->name('admin.orderdetail.restore');
        Route::get('destroy/{id}', [OrderdetailController::class, 'destroy'])->name('admin.orderdetail.destroy');
    });

    //post 
    Route::prefix('post')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('admin.post.index');
    Route::get('trash', [PostController::class, 'trash'])->name('admin.post.trash');
    Route::get('show/{id}', [PostController::class, 'show'])->name('admin.post.show');
    Route::get('create', [PostController::class, 'create'])->name('admin.post.create');
    Route::get('store', [PostController::class, 'store'])->name('admin.post.store');
    Route::get('edit/{id}', [PostController::class, 'edit'])->name('admin.post.edit');
    Route::get('update/{id}', [PostController::class, 'update'])->name('admin.post.update');
    Route::get('delete/{id}', [PostController::class, 'delete'])->name('admin.post.delete');
    Route::get('restore/{id}', [PostController::class,'restore'])->name('admin.post.restore');
    Route::get('destroy/{id}', [PostController::class, 'destroy'])->name('admin.post.destroy');
});

    //topic 
    Route::prefix('topic')->group(function () {
        Route::get('/', [TopicController::class, 'index'])->name('admin.topic.index');
        Route::get('trash', [TopicController::class, 'trash'])->name('admin.topic.trash');
        Route::get('show/{id}', [TopicController::class, 'show'])->name('admin.topic.show');
        Route::get('create', [TopicController::class, 'create'])->name('admin.topic.create');
        Route::get('store', [TopicController::class, 'store'])->name('admin.topic.store');
        Route::get('edit/{id}', [TopicController::class, 'edit'])->name('admin.topic.edit');
        Route::get('update/{id}', [TopicController::class, 'update'])->name('admin.topic.update');
        Route::get('delete/{id}', [TopicController::class, 'delete'])->name('admin.topic.delete');
        Route::get('restore/{id}', [TopicController::class,'restore'])->name('admin.topic.restore');
        Route::get('destroy/{id}', [TopicController::class, 'destroy'])->name('admin.topic.destroy');
    });
    //user  
    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('admin.user.index');
        Route::get('trash', [UserController::class, 'trash'])->name('admin.user.trash');
        Route::get('show/{id}', [UserController::class, 'show'])->name('admin.user.show');
        Route::get('create', [UserController::class, 'create'])->name('admin.user.create');
        Route::get('store', [UserController::class, 'store'])->name('admin.user.store');
        Route::get('edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::get('update/{id}', [UserController::class, 'update'])->name('admin.user.update');
        Route::get('delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');
        Route::get('restore/{id}', [UserController::class,'restore'])->name('admin.user.restore');
        Route::get('destroy/{id}', [UserController::class, 'destroy'])->name('admin.user.destroy');
    });
});;
