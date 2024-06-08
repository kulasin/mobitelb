<?php

use App\Http\Controllers\InformationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;


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

Route::get('/', function () {
    return view('/');
});

Auth::routes();


Route::post('/forgot-password', [UserController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [UserController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/reset-password', [UserController::class, 'resetPassword'])->name('password.update');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/grid', [ProductController::class, 'grid'])->name('grid');
Route::get('/grid/filter', [ProductController::class, 'filter'])->name('products.filter');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');


Route::get('/help', [InformationController::class, 'help'])->name('help');
Route::get('/about', [InformationController::class, 'about'])->name('about');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/add/mobile', [CartController::class, 'addToCartMobile'])->name('cart.add.mobile');
Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::get('cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::post('cart/placeOrder', [CartController::class, 'placeOrder'])->name('order');
Route::get('cart/confirm', [CartController::class, 'confirm'])->name('cart.confirm');

Route::middleware('auth')->group(function () {
   
    Route::get('/user/orders', [UserController::class, 'orderHistory'])->name('user.orders');
    Route::get('/user/orders/{orderId}', [UserController::class, 'orderDetails'])->name('user.order');
    Route::get('/user/account', [UserController::class, 'account'])->name('user.account');
    Route::post('/user/update', [UserController::class, 'update'])->name('user.update');
    Route::get('/user/users', [UserController::class, 'userList'])->name('user.users');
    Route::post('/user/orders/{orderId}/updateStatus', [UserController::class, 'updateStatus'])->name('user.updateStatus');


    Route::get('/products', [ProductController::class, 'products'])->name('products');
    Route::get('/categories', [ProductController::class, 'category'])->name('categories');
    Route::get('/subcategories', [ProductController::class, 'products'])->name('subcategories');
    Route::get('/brandovi', [ProductController::class, 'products'])->name('brandovi');

    // Create a new product (show form and handle form submission)

Route::get('/product/user/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/user/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{id}/update', [ProductController::class, 'update'])->name('product.update');
Route::post('/product/delete-image', [ProductController::class, 'deleteImage'])->name('product.deleteImage');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('product.delete');



Route::get('/product/category/create', [ProductController::class, 'CreateCategory'])->name('user.create-category');
Route::post('/product/category/store', [ProductController::class, 'StoreCategory'])->name('user.store-category');
Route::get('/product/category/{id}/edit', [ProductController::class, 'EditCategory'])->name('user.edit-category');
Route::put('/product/category/{id}/update', [ProductController::class, 'UpdateCategory'])->name('user.update-category');
Route::delete('/products/category/{id}', [ProductController::class, 'DestroyCategory'])->name('user.delete-category');
    

    


});

