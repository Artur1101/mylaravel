<?php

namespace App\Http\Controllers\MyShop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\MyShop;

use App\Models\User_my;
use App\Models\Cart;
use App\Models\Categoryes;
use App\Models\Good_my;
use App\Models\Order;

class myShopController extends Controller
{
    public function shop_404()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }
        
        // return view('shop_shop_404', compact('MyShop_array'));
    }
    public function about()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }
        
        // return view('shop_about', compact('MyShop_array'));
    }
    public function blog()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }
        
        // return view('shop_blog', compact('MyShop_array'));
    }
    public function blogdetail()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }
        
        // return view('shop_blogdetail', compact('MyShop_array'));
    }
    public function cartpage()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }
        
        // return view('shop_cartpage', compact('MyShop_array'));
    }
    public function categoryV1_2()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }
        
        // return view('shop_categoryV1_2', compact('MyShop_array'));
    }
    public function categoryV1()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }
        
        // return view('shop_categoryV1', compact('MyShop_array'));
    }
    public function categoryV2_2()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }
        
        // return view('shop_categoryV2_2', compact('MyShop_array'));
    }
    public function categoryV2()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }
        
        // return view('shop_categoryV2', compact('MyShop_array'));
    }
    public function categoryV3_2()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }
        
        // return view('shop_categoryV3_2', compact('MyShop_array'));
    }
    public function categoryV3()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }
        
        // return view('shop_categoryV3', compact('MyShop_array'));
    }
    public function categoryV4_2()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }
        
        // return view('shop_categoryV4_2', compact('MyShop_array'));
    }
    public function categoryV4()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }
        
        // return view('shop_categoryV4', compact('MyShop_array'));
    }
    public function checkout()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }
        
        // return view('shop_checkout', compact('MyShop_array'));
    }
    public function compare()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }
        
        // return view('shop_compare', compact('MyShop_array'));
    }
    public function contact()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }
        
        // return view('shop_contact', compact('MyShop_array'));
    }
    public function homeV1()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }
        
        // return view('shop_homeV1', compact('MyShop_array'));
    }
    public function homeV2()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }
        
        // return view('shop_homeV2', compact('MyShop_array'));
    }
    public function homeV3()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }
        
        // return view('shop_homeV3', compact('MyShop_array'));
    }
    public function productV1()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }
        
        // return view('shop_productV1', compact('MyShop_array'));
    }
    public function productV2()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }
        
        // return view('shop_productV2', compact('MyShop_array'));
    }
    public function productV3()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }
        
        // return view('shop_productV3', compact('MyShop_array'));
    }
    public function quickview()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }
        
        // return view('shop_quickview', compact('MyShop_array'));
    }
    public function trackyourorder()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }
        
        // return view('shop_trackyourorder', compact('MyShop_array'));
    }
    public function wishlist()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }
        
        // return view('shop_wishlist', compact('MyShop_array'));
    }
}
