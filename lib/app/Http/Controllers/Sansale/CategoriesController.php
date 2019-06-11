<?php

namespace App\Http\Controllers\Sansale;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shop;
use App\Models\Category;
use App\Models\Coupon;
class CategoriesController extends Controller
{
    //
    public function getCateIndex(){
        $data['shops']=Shop::all();
        $data['cates']=Category::all();
        $data['coupon']=Coupon::all();
        return view('frontend.category',$data);
    }
}
