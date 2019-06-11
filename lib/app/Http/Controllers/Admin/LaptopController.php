<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Models\Laptop;
use DB;
class LaptopController extends Controller
{
    //
    public function getIndex(){
        $data['laptops']=DB::table('laptop')
                            ->get();
        return view('backend.laptop',$data);
    }
    public function getAdd(){
        return view('backend.addlaptop');
    }
    public function postAdd(AddProductRequest $request){
        $filename = $request->img->getClientOriginalName();
        $product= new Laptop;
        $product->lt_name=$request->name;
        $product->product='laptop';
        $product->lt_slug=str_slug($request->name);
        $product->lt_status=$request->status;
        $product->lt_description=$request->description;
        $product->lt_price=$request->price;
        $product->lt_type=$request->product_type ;
        $product->lt_type_slug=str_slug($request->product_type) ;
        $product->lt_promotion=$request->promotion;
        $product->lt_image=$filename;
        $product->save();
        $request->img->storeAs('laptop',$filename);
        return  redirect()->intended('admin/laptop')->with('flash_noti','Added Successfully');

    }
    public function getEdit($id){
        $data['laptop']=Laptop::find($id);
        return view('backend.editlaptop',$data);
    }
    public function postEdit(AddProductRequest $request,$id ){
        $laptop= new Laptop;
        $arr['lt_name']= $request->name;
        $arr['product']= 'laptop';
        $arr['lt_slug']= str_slug($request->name);
        $arr['lt_price']= $request->price;
        $arr['lt_status']= $request->status;
        $arr['lt_description']= $request->description;
        $arr['lt_promotion']= $request->promotion;
        $arr['lt_type']= $request->product_type;
        $arr['lt_type_slug']= str_slug($request->product_type);
        if($request->hasFile('img')){
            $img=$request->img->getClientOriginalName();
            $arr['lt_image']=$img;
            $request->img->storeAs('laptop',$img);
        }

        $laptop::where('lt_id',$id)->update($arr);
        return redirect('admin/laptop')->with('flash_noti','Edited Successfully');
    }
    public function getDelete($id){
        Laptop::destroy($id);
        return back()->with('flash_noti','Deleted Successfully');
    }
}
