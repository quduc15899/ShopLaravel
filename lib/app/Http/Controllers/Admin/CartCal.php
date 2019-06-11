<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use DB;
class CartCal extends Controller
{
    //
     public function cartCal(){
        $carts=DB::table('cart')->get();
        $tongtien=0;
        foreach($carts as $cart){
            $tongtien=$tongtien + $cart->cart_price;
        }
        return $tongtien;
    }
}
