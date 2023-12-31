<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

use App\Http\Controllers\MyShop\myShopController;
use App\Http\Controllers\UserController;


Route::get('/index', [myShopController::class, 'index']);
Route::get('/shop_404', [myShopController::class, 'shop_404']);
Route::get('/shop_about', [myShopController::class, 'about']);
Route::get('/shop_blog', [myShopController::class, 'blog']);
Route::get('/shop_blogdetail', [myShopController::class, 'blogdetail']);
Route::get('/shop_cartpage', [myShopController::class, 'cartpage']);
Route::get('/shop_categoryV1_2', [myShopController::class, 'categoryV1_2']);
Route::get('shop_categoryV1', [myShopController::class, 'categoryV1']);
Route::get('/shop_categoryV2_2', [myShopController::class, 'categoryV2_2']);
Route::get('/shop_categoryV2', [myShopController::class, 'categoryV2']);
Route::get('/shop_categoryV3_2', [myShopController::class, 'categoryV3_2']);
Route::get('/shop_categoryV3', [myShopController::class, 'categoryV3']);
Route::get('/shop_categoryV4_2', [myShopController::class, 'categoryV4_2']);
Route::get('/shop_categoryV4', [myShopController::class, 'categoryV4']);
Route::get('/shop_checkout', [myShopController::class, 'checkout']);
Route::get('/shop_compare', [myShopController::class, 'compare']);
Route::get('/shop_contact', [myShopController::class, 'contact']);
Route::get('/shop_homeV1', [myShopController::class, 'homeV1']);
// Route::get('/shop_homeV1', 'myShopController')->name('homeV1');
Route::get('/shop_homeV2', [myShopController::class, 'homeV2']);
Route::get('/shop_homeV3', [myShopController::class, 'homeV3']);
Route::get('/shop_productV1', [myShopController::class, 'productV1']);
Route::get('/shop_productV2', [myShopController::class, 'productV2']);
Route::get('/shop_productV3', [myShopController::class, 'productV3']);
Route::get('/shop_quickview', [myShopController::class, 'quickview']);
Route::get('/shop_registration', [UserController::class, 'registration']);
Route::get('/shop_trackyourorder', [myShopController::class, 'trackyourorder']);
Route::get('/shop_wishlist', [myShopController::class, 'wishlist']);



