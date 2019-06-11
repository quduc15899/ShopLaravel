<?php

namespace App\Http\Controllers\Sansale;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Shop;
class BlogsController extends Controller
{
    //
    public function getBlogIndex(){
        $data['coupon']=Coupon::all();
        return view('frontend.blog_articles',$data);
    }
}
