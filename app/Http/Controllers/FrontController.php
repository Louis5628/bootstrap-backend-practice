<?php

namespace App\Http\Controllers;

use App\Product;
use App\UserClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class FrontController extends Controller
{
    //
    public function product() {
        $product = DB::table('products')->get();
        return view('front.index', compact('product'));
    }


    public function login(){
        return view('front.member');
    }


    public function loginSend(Request $request) {
        UserClient::create([
           'email' => $request->email,
           'password' =>  Hash::make($request['password']),
       ]);

       return redirect('/')->with('message', '成功登入');

    }
    
}
