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

Route::get('/MyShop.shop_404', [myShopController::class, 'shop_404']);
Route::get('/MyShop.shop_about', [myShopController::class, 'about']);
Route::get('/MyShop.shop_blog', [myShopController::class, 'blog']);
Route::get('/MyShop.shop_blogdetail', [myShopController::class, 'blogdetail']);
Route::get('/MyShop.shop_cartpage', [myShopController::class, 'cartpage']);
Route::get('/MyShop.shop_categoryV1_2', [myShopController::class, 'categoryV1_2']);
Route::get('/MyShop.shop_categoryV1', [myShopController::class, 'categoryV1']);
Route::get('/MyShop.shop_categoryV2_2', [myShopController::class, 'categoryV2_2']);
Route::get('/MyShop.shop_categoryV2', [myShopController::class, 'categoryV2']);
Route::get('/MyShop.shop_categoryV3_2', [myShopController::class, 'categoryV3_2']);
Route::get('/MyShop.shop_categoryV3', [myShopController::class, 'categoryV3']);
Route::get('/MyShop.shop_categoryV4_2', [myShopController::class, 'categoryV4_2']);
Route::get('/MyShop.shop_categoryV4', [myShopController::class, 'categoryV4']);
Route::get('/MyShop.shop_checkout', [myShopController::class, 'checkout']);
Route::get('/MyShop.shop_compare', [myShopController::class, 'compare']);
Route::get('/MyShop.shop_contact', [myShopController::class, 'contact']);
Route::get('/MyShop.shop_homeV1', [myShopController::class, 'homeV1']);
Route::get('/MyShop.shop_homeV2', [myShopController::class, 'homeV2']);
Route::get('/MyShop.shop_homeV3', [myShopController::class, 'homeV3']);
Route::get('/MyShop.shop_productV1', [myShopController::class, 'productV1']);
Route::get('/MyShop.shop_productV2', [myShopController::class, 'productV2']);
Route::get('/MyShop.shop_productV3', [myShopController::class, 'productV3']);
Route::get('/MyShop.shop_quickview', [myShopController::class, 'quickview']);
Route::get('/MyShop.shop_trackyourorder', [myShopController::class, 'trackyourorder']);
Route::get('/MyShop.shop_wishlist', [myShopController::class, 'wishlist']);



