<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;
use App\Models\Computer;
use App\Models\Camera;
use App\Models\Contact;
use App\Models\Cart;
use DB;
use App\Http\Controllers\Admin\CartCal;
class FrontendController extends Controller
{
    //

    public function getHome(){
        $data['cm_new_updates']=DB::table('camera')
        ->orderBy('updated_at','desc')
        ->get();
        $data['lt_new_updates']=DB::table('laptop')
        ->orderBy('updated_at','desc')
        ->get();
        $data['cp_new_updates']=DB::table('computer')
        ->orderBy('updated_at','desc')
        ->get();
        $data['carts']=DB::table('cart')
        ->orderBy('updated_at','desc')
        ->get();
        $data['cart_count']=DB::table('cart')
            ->count();
        $cc= new CartCal;
        $data['cart_tinh_tien']=$cc->cartCal();
        return view('frontend.index',$data);
    }
    public function getCameraPage(){
        $data['cameras']=DB::table('camera')
        ->orderBy('updated_at','desc')
        ->get();
        $data['carts']=DB::table('cart')
        ->orderBy('updated_at','desc')
        ->get();
        $data['cart_count']=DB::table('cart')
            ->count();
        $cc= new CartCal;
        $data['cart_tinh_tien']=$cc->cartCal();
        return view('frontend.cameraStore',$data);
    }
    public function getCameraCate($name){
        $data['camera_cate'] = DB::table('camera')
        ->where('cm_type_slug',$name)
        ->get();
        $data['camera_cate_name'] = DB::table('camera')
        ->where('cm_type_slug',$name)
        ->first();
        $data['carts']=DB::table('cart')
        ->orderBy('updated_at','desc')
        ->get();
        $data['cart_count']=DB::table('cart')
            ->count();
        $cc= new CartCal;
        $data['cart_tinh_tien']=$cc->cartCal();
        return view('frontend.cameraCate',$data);
    }
    public function getCameraDetail($name){
        $data['camera']=DB::table('camera')
        ->where('cm_slug',$name)
        ->first();
        $data['carts']=DB::table('cart')
                                ->orderBy('updated_at','desc')
                                ->get();
        $data['cart_count']=DB::table('cart')
            ->count();
        $cc= new CartCal;
        $data['cart_tinh_tien']=$cc->cartCal();
        return view('frontend.cameraDetail',$data);
    }

    public function getComputerPage(){
        $data['computers']=DB::table('computer')
        ->orderBy('updated_at','desc')
        ->get();
        $data['carts']=DB::table('cart')
        ->orderBy('updated_at','desc')
        ->get();
        $data['cart_count']=DB::table('cart')
            ->count();
        $cc= new CartCal;
        $data['cart_tinh_tien']=$cc->cartCal();
        return view('frontend.computerStore',$data);
    }
    public function getComputerCate($name){
        $data['computer_cates'] = DB::table('computer')
        ->where('cp_type_slug',$name)
        ->get();
        $data['computer_cate_name'] = DB::table('computer')
        ->where('cp_type_slug',$name)
        ->first();
        $data['carts']=DB::table('cart')
                                ->orderBy('updated_at','desc')
                                ->get();
        $data['cart_count']=DB::table('cart')
            ->count();
        $cc= new CartCal;
        $data['cart_tinh_tien']=$cc->cartCal();
        return view('frontend.computerCate',$data);
    }
    public function getComputerDetail($name){
        $data['computer']=DB::table('computer')
        ->where('cp_slug',$name)
        ->first();
        $data['carts']=DB::table('cart')
                                ->orderBy('updated_at','desc')
                                ->get();
        $data['cart_count']=DB::table('cart')
            ->count();
        $cc= new CartCal;
        $data['cart_tinh_tien']=$cc->cartCal();
        return view('frontend.computerDetail',$data);
    }
    public function getLaptopPage(){
        $data['laptops']=DB::table('laptop')
        ->orderBy('updated_at','desc')
        ->get();
        $data['carts']=DB::table('cart')
                                ->orderBy('updated_at','desc')
                                ->get();
        $data['cart_count']=DB::table('cart')
            ->count();
        $cc= new CartCal;
        $data['cart_tinh_tien']=$cc->cartCal();
        return view('frontend.laptopStore',$data);
    }
    public function getLaptopCate($name){
        $data['laptop_cates'] = DB::table('laptop')
        ->where('lt_type_slug',$name)
        ->get();
        $data['laptop_cate_name'] = DB::table('laptop')
        ->where('lt_type_slug',$name)
        ->first();
        $data['carts']=DB::table('cart')
                                ->orderBy('updated_at','desc')
                                ->get();
        $data['cart_count']=DB::table('cart')
            ->count();
        $cc= new CartCal;
        $data['cart_tinh_tien']=$cc->cartCal();
        return view('frontend.laptopCate',$data);
    }
    public function getLaptopDetail($name){
        $data['laptop']=DB::table('laptop')
        ->where('lt_slug',$name)
        ->first();
        $data['carts']=DB::table('cart')
                                ->orderBy('updated_at','desc')
                                ->get();
        $data['cart_count']=DB::table('cart')
            ->count();
        $cc= new CartCal;
        $data['cart_tinh_tien']=$cc->cartCal();
        return view('frontend.laptopDetail',$data);
    }
    public function getContactPage(){

        $data['carts']=DB::table('cart')
                                ->orderBy('updated_at','desc')
                                ->get();
        $data['cart_count']=DB::table('cart')
            ->count();
        $cc= new CartCal;
        $data['cart_tinh_tien']=$cc->cartCal();
        return view('frontend.contact',$data);
    }
    public function getCart($loaisanpham,$tensanpham){
        if($loaisanpham=='camera'){

            $data['items']=DB::table('camera')
            ->where('cm_slug',$tensanpham)
            ->first();
            $cart= new Cart;
            $cart->cart_name=$data['items']->cm_name;
            $cart->type='camera';
            $cart->image=$data['items']->cm_image;
            $cart->cart_slug=$data['items']->cm_slug;
            $cart->cart_price=$data['items']->cm_price;
            $cart->save();
        }
        if($loaisanpham=='laptop'){

            $data['items']=DB::table('laptop')
            ->where('lt_slug',$tensanpham)
            ->first();
            $cart= new Cart;
            $cart->cart_name=$data['items']->lt_name;
            $cart->type='laptop';
            $cart->image=$data['items']->lt_image;
            $cart->cart_slug=$data['items']->lt_slug;
            $cart->cart_price=$data['items']->lt_price;
            $cart->save();
        }
        if($loaisanpham=='computer'){

            $data['items']=DB::table('computer')
            ->where('cp_slug',$tensanpham)
            ->first();
            $cart= new Cart;
            $cart->cart_name=$data['items']->cp_name;
            $cart->type='computer';
            $cart->image=$data['items']->cp_image;
            $cart->cart_slug=$data['items']->cp_slug;
            $cart->cart_price=$data['items']->cp_price;
            $cart->save();
        }
        return back();
    }
    public function getDeleteCart($tensanpham){
        $delete=Cart::where('cart_slug',$tensanpham)->delete();
        return back();
    }
    public function getCheckoutPage(){
        $data['carts']=DB::table('cart')
                                ->orderBy('updated_at','desc')
                                ->get();
        $data['cart_count']=DB::table('cart')
            ->count();
        $cc= new CartCal;
        $data['cart_tinh_tien']=$cc->cartCal();
        return view('frontend.checkout',$data);
    }
    public function getSearch(Request $request){

        $result=$request->result;
        $data['keyword']=$result;

        $result=str_replace(' ','%',$result);
        if($request->cate==0){
            $data['items']=DB::table('camera')
            ->where('cm_name','like','%'.$result.'%')
            ->get();
            $data['cate']='camera';
        }
        if($request->cate==1){
            $data['items']=DB::table('laptop')
            ->where('lt_name','like','%'.$result.'%')
            ->get();
            $data['cate']='laptop';
        }
        if($request->cate==2){
            $data['items']=DB::table('computer')
            ->where('cp_name','like','%'.$result.'%')
            ->get();
            $data['cate']='computer';
        }
        $data['carts']=DB::table('cart')
                                ->orderBy('updated_at','desc')
                                ->get();
        $data['cart_count']=DB::table('cart')
            ->count();
        $cc= new CartCal;
        $data['cart_tinh_tien']=$cc->cartCal();
        return view('frontend.search',$data);
    }
}
