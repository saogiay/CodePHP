<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductDetailController;
use App\Http\Controllers\Admin\ProductImageController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Front\AccountController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\CheckOutController;
use App\Http\Controllers\Front\Contact;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//front(client)
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('shop')->group(function () {
    Route::get('product/{id}', [ShopController::class, 'show']);
    Route::post('product/{id}', [ShopController::class, 'postComment']);
    Route::get('', [ShopController::class, 'index']);
    Route::get('category/{categoryName}', [ShopController::class, 'category']);
});

Route::prefix('cart')->group(function () {
    Route::get('add', [CartController::class, 'add']);
    Route::get('/', [CartController::class, 'index']);
    Route::get('delete', [CartController::class, 'delete']);
    Route::get('destroy', [CartController::class, 'destroy']);
    Route::get('update', [CartController::class, 'update']);
});

Route::get('contact', [Contact::class, 'index']);

Route::prefix('checkout')->group(function () {
    Route::get('', [CheckOutController::class, 'index']);
    Route::post('/', [CheckOutController::class, 'addOrder']);
    Route::get('/result', [CheckOutController::class, 'result']);
    Route::get('/vnPayCheck', [CheckOutController::class, 'vnPayCheck']);
});

Route::prefix('account')->group(function () {
    Route::get('login', [AccountController::class, 'login']);
    Route::post('login', [AccountController::class, 'checkLogin']);
    Route::get('logout', [AccountController::class, 'logout']);
    Route::get('register', [AccountController::class, 'register']);
    Route::post('register', [AccountController::class, 'postRegister']);

    Route::prefix('my-order')->middleware('CheckMemberLogin')->group(function () {
        Route::get('/', [AccountController::class, 'myOrderIndex']);
        Route::get('{id}', [AccountController::class, 'myOrderShow']);
    });
});

//Dashboard(admin)
Route::prefix('admin')->middleware('CheckAdminLogin')->group(function () {
    Route::redirect('','admin/user');

    Route::resource('user', UserController::class);
    Route::resource('category', ProductCategoryController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('product', ProductController::class);
    Route::resource('product/{product_id}/image', ProductImageController::class);
    Route::resource('product/{product_id}/detail', ProductDetailController::class);
    Route::resource('order', OrderController::class);

    Route::prefix('login')->group(function(){
        Route::get('',[AdminHomeController::class,'getLogin'])->withoutMiddleware('CheckAdminLogin');
        Route::post('',[AdminHomeController::class,'postLogin'])->withoutMiddleware('CheckAdminLogin');;
    });

    Route::get('logout',[AdminHomeController::class,'logout']);
});
