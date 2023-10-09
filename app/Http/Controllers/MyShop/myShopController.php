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
    public function index()
    {
        // return "I am confrollwer!";
        // $MyShop_array = [];
        // foreach (MyShop::all() as $MyShop) {
        //     $MyShop_array[] = $MyShop->MyShopname;
        // }

        return view('MyShop.index');
    }
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
    public function registration()
    {
    //     function connect(
    //         $host='localhost',
    //         $user='root',
    //         $pass='',
    //         $dbname='MyShop')
    //         {
    //             $cs = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8;';
    //             $options = array(
    //                 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    //                 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    //                 PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
    //             );
    //             try {
    //                 $pdo = new PDO($cs, $user, $pass, $options);
    //                 return $pdo;
    //             } catch (PDOException $e) {
    //                 echo $e->getMessage();
    //                 return false;
    //             }
    //         }

    // function register($name,$pass,$email){
    //     $name=trim(htmlspecialchars($name));
    //     $pass=trim(htmlspecialchars($pass));
    //     $email=trim(htmlspecialchars($email));
    //     if ($name=="" || $pass=="" || $email=="") {
    //         echo "<h3/><span style='color:red;'>Fill All Required Fields!</span><h3/>";
    //         return false;
    //     }
    //     if (strlen($name)<3 || strlen($name)>30 || strlen($pass)<3 || strlen($pass)>30) {
    //         echo "<h3/><span style='color:red;'>Values Length Must Be Between 3 And 30!</span><h3/>";
    //         return false;
    //     }
    //     $ins='insert into users (login,pass,email,roleid) values("'.$name.'","'.md5($pass).'","'.$email.'",1)';
    //     $pdo = connect();
    //     try {
    //         $pdo->exec($ins);
    //     } catch (PDOException $e) {
    //         echo 'Error: ' . $e->getMessage() . '<br>';
    //         exit();
    //     }
    //     return true;
    // }

    // function login($name,$pass)
    // {
    //     $name=trim(htmlspecialchars($name));
    //     $pass=trim(htmlspecialchars($pass));
    //     if ($name=="" || $pass=="")
    //     {
    //         echo "<h3/><span style='color:red;'>Fill All Required Fields!</span><h3/>";
    //         return false;
    //     }
    //     if (strlen($name)<3 || strlen($name)>30 || strlen($pass)<3 || strlen($pass)>30) {
    //         echo "<h3/><span style='color:red;'>Values Length Must Be Between 3 And 30!</span><h3/>";
    //         return false;
    //     }
    //     $pdo = connect();
    //     $sel='select * from users where login="'.$name.'"
    //     and pass="'.md5($pass).'"';

    //     $ps = $pdo->prepare($sel);
    //     $ps->execute();
    //     if ($row = $ps->fetch()) {
    //         $_SESSION['ruser']=$name;
    //         if($row[5]==0)
    //         {
    //             $_SESSION['radmin']=$name;
    //         }
    //         return true;
    //     }
    //     else{
    //         echo "<h3/><span style='color:red;'>No Such User!</span><h3/>";
    //         return false;
    //     }

    // }

        return view('MyShop.shop_registration');
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
