<?php

use App\Http\Controllers\Admin1Controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VariantController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/loginad', [Admin1Controller::class,'loginad'])->name('loginad');
// Route::post('/loginad', [Admin1Controller::class,'postLoginad'])->name('admin.loginad');
// Route::get('/logout', [Admin1Controller::class,'logout'])->name('admin.logout'); ->middleware('admin')

//route nhóm prefix('tên chug')
Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'index']);
    Route::resource('category',CategoryController::class);
    Route::resource('product',ProductController::class);
    Route::resource('variant',VariantController::class);
    Route::resource('banner',BannerController::class);
});



Auth::routes();
Route::get('/', [UserController::class,'index']);
Route::get('detail/{name_product}', [UserController::class,'detail'])->name('detail');
Route::get('add-cart', [CartController::class,'addCart'])->name('addCart');
Route::get('check-cart', [CartController::class,'CheckCard'])->name('checkcard');
Route::get('update-cart', [CartController::class,'UpdateCard'])->name('updatecard');

Route::get('viewcart', [UserController::class,'viewcart'])->name('viewcart');
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('destroy');
Route::get('/checkCart', [CartController::class, 'checkCart'])->name('checkCart');
Route::get('/update-quantity-cart', [CartController::class,'quantityCart'])->name('quantityCart');

Route::get('/checkout/{id}', [CheckoutController::class,'checkout'])->name('checkout');




