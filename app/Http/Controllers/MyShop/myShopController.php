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
    public function categores()
    {
        $MyShop_array = [];
        foreach (MyShop::all() as $MyShop) {
            $MyShop_array[] = $MyShop->MyShopname;
        }
        
        return view('shop_category', compact('MyShop_array'));
    }
}
