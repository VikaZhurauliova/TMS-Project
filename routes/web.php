<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'main'])->name('main');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/wishlist', [WishlistController::class, 'wishlist'])->name('wishlist');
Route::get('/product', [ProductController::class, 'product'])->name('product');
Route::get('/shop', [ShopController::class, 'shop'])->name('shop');
