<?php

namespace App\Http\Controllers\Sansale;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Shop;
use App\Models\Coupon;
use DB;
class CouponsController extends Controller
{
    //
    public function getCouponCate($name_slug,Request $request){

        $cate_id=DB::table('ss_categories')
                    ->where('cate_slug',$name_slug)
                    ->first();
        $data['shops']=Shop::all();
        $data['mgg_new_update']=Coupon::orderBy('mgg_id','desc')
                                        ->take(6)
                                        ->get();
        $data['danhmuc_counter']=DB::table('ss_magiamgia')->where('mgg_cate',$cate_id->cate_id)->count();
        $data['danhmuc']=DB::table('ss_categories')->where('cate_slug',$name_slug)->first();
        $data['noibat_count']=DB::table('ss_magiamgia')->where('mgg_cate',$cate_id->cate_id)->where('mgg_noibat',0)->count();
        $data['coupon_count']=DB::table('ss_magiamgia')->where('mgg_cate',$cate_id->cate_id)->where('mgg_type',0)->count();
        $data['deals_count']=DB::table('ss_magiamgia')->where('mgg_cate',$cate_id->cate_id)->where('mgg_type',1)->count();
        $data['coupons']=DB::table('ss_magiamgia')
                            ->join('ss_categories','ss_magiamgia.mgg_cate','=','ss_categories.cate_id')
                            ->where('mgg_cate',$cate_id->cate_id)
                            ->orderBy('mgg_id','desc')
                            ->get();
        $data['coupons_noibat']=DB::table('ss_magiamgia')
                            ->join('ss_categories','ss_magiamgia.mgg_cate','=','ss_categories.cate_id')
                            ->where('mgg_cate',$cate_id->cate_id)
                            ->where('mgg_noibat',0)
                            ->orderBy('mgg_id','desc')
                            ->get();
        $data['coupons_coupon']=DB::table('ss_magiamgia')
                            ->join('ss_categories','ss_magiamgia.mgg_cate','=','ss_categories.cate_id')
                            ->where('mgg_cate',$cate_id->cate_id)
                            ->where('mgg_type',0)
                            ->orderBy('mgg_id','desc')
                            ->get();
        $data['coupons_deals']=DB::table('ss_magiamgia')
                            ->join('ss_categories','ss_magiamgia.mgg_cate','=','ss_categories.cate_id')
                            ->where('mgg_cate',$cate_id->cate_id)
                            ->where('mgg_type',1)
                            ->orderBy('mgg_id','desc')
                            ->get();
        $data['shop_noibat']=Shop::all()
                            ->random(6);
        $data['cps']=Coupon::all();

        return view('frontend.khuyen-mai',$data);
    }
    public function getCouponStores($name_slug , Request $request){

        if(isset($request->cate) && $request->ajax()){
            $shop_id=DB::table('ss_shops')
                    ->where('shop_slug',$name_slug)
                    ->first();
        $data['shop']=DB::table('ss_shops')
                        ->where('shop_slug',$name_slug)
                        ->first();
        $data['cates']=Category::all();
        $data['mgg_new_update']=Coupon::orderBy('mgg_id','desc')
                                        ->take(6)
                                        ->get();
        $data['shop_noibat']=Shop::all()
                            ->random(6);
        $data['cps']=Coupon::all();
            $cate=$request->cate;
            $data['coupons']=DB::table('ss_magiamgia')->whereIN('mgg_cate',explode(',',$cate))->get();
            response()->json($data['coupons']);
            dd($data['coupons']);
            return view('frontend.ma-giam-gia',$data);
        }
        else{
            $shop_id=DB::table('ss_shops')
                    ->where('shop_slug',$name_slug)
                    ->first();
        $data['shop']=DB::table('ss_shops')
                        ->where('shop_slug',$name_slug)
                        ->first();
        $data['cates']=Category::all();
        $data['mgg_new_update']=Coupon::orderBy('mgg_id','desc')
                                        ->take(6)
                                        ->get();
        $data['shop_noibat']=Shop::all()
                            ->random(6);
        $data['cps']=Coupon::all();
            $data['coupons']=DB::table('ss_magiamgia')
                            ->join('ss_categories','ss_magiamgia.mgg_cate','=','ss_categories.cate_id')
                            ->where('mgg_shop',$shop_id->shop_id)
                            ->orderBy('mgg_id','desc')
                            ->get();
            return view('frontend.ma-giam-gia',$data);
        }






    }
}
