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
        // return "I am confrollwer!";
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }

        return view('MyShop.shop_404');
    }
    public function about()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }

        return view('MyShop.shop_about');
    }
    public function blog()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }

        return view('MyShop.shop_blog');
    }
    public function blogdetail()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }

        return view('MyShop.shop_blogdetail');
    }
    public function cartpage()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }

        return view('MyShop.shop_cartpage');
    }
    public function categoryV1_2()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }

        return view('MyShop.shop_categoryV1_2');
    }
    public function categoryV1()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }

        return view('MyShop.shop_categoryV1');
    }
    public function categoryV2_2()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }

        return view('MyShop.shop_categoryV2_2');
    }
    public function categoryV2()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }

        return view('MyShop.shop_categoryV2');
    }
    public function categoryV3_2()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }

        return view('MyShop.shop_categoryV3_2');
    }
    public function categoryV3()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }

        return view('MyShop.shop_categoryV3');
    }
    public function categoryV4_2()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }

        return view('MyShop.shop_categoryV4_2');
    }
    public function categoryV4()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }

        return view('MyShop.shop_categoryV4');
    }
    public function checkout()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }

        return view('MyShop.shop_checkout');
    }
    public function compare()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }

        return view('MyShop.shop_compare');
    }
    public function contact()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }

        return view('MyShop.shop_contact');
    }
    public function homeV1()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }

        return view('MyShop.shop_homeV1');
    }
    public function homeV2()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }

        return view('MyShop.shop_homeV2');
    }
    public function homeV3()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }

        return view('MyShop.shop_homeV3');
    }
    public function productV1()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }

        return view('MyShop.shop_productV1');
    }
    public function productV2()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }

        return view('MyShop.shop_productV2');
    }
    public function productV3()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }

        return view('MyShop.shop_productV3');
    }
    public function quickview()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }

        return view('MyShop.shop_quickview');
    }
    public function trackyourorder()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }

        return view('MyShop.shop_trackyourorder');
    }
    public function wishlist()
    {
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }

        return view('MyShop.shop_wishlist');
    }
}
