<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registration(Request $request)
    {
        $messages = [
            'login.required' =>'Поле login обязательно для заполнения.',
            'login.max' =>'Поле login должно быть не более 30 символов.',
            'login.min' =>'Поле login должно быть не менее 3 символов.',
            'pass1.same' =>'Пароль и подтвержление должны совподать',
            ];


        $request->validate([
            'login' => 'required|max:30 | min:3',
            'pass1' => 'required|same:pass2|min:6|max:20'
        ], $messages);


       $name=$request->name;

        return view('MyShop.shop_registration');
    }
}
