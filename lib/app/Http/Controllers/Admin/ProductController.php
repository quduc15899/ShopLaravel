<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Models\Product;
use App\Models\Category;
use DB;
class ProductController extends Controller
{
    //
    public function getProduct(){
        $data['products']=DB::table('products')
                            // ->join('categories','products.prod_cate','=','categories.id')
                            // ->orderBy('id','desc')
                            ->get();
        return view('backend.product',$data);
    }
    public function getAddProduct(){
        $data['catelist']=Category::all();
        return view('backend.addproduct',$data);
    }
    public function postAddProduct(AddProductRequest $request){
        $filename = $request->img->getClientOriginalName();
        $product= new Product;
        $product->name=$request->name;
        $product->slug=str_slug($request->name);
        $product->status=$request->status;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->prod_cate=$request->cate ;
        $product->prod_type=$request->product_type ;
        $product->promotion=$request->promotion;
        $product->image=$filename;
        $product->save();
        $request->img->storeAs('product',$filename);
        return  redirect()->intended('admin/product')->with('flash_noti','Added Successfully');

    }
    public function getEditProduct($id){
        $data['product']=Product::find($id);
        $data['catelist']=Category::all();
        return view('backend.editproduct',$data);
    }
    public function postEditProduct(AddProductRequest $request,$id ){
        $product= new Product;
        $arr['name']= $request->name;
        $arr['slug']= str_slug($request->name);
        $arr['price']= $request->price;
        $arr['status']= $request->status;
        $arr['description']= $request->description;
        $arr['promotion']= $request->promotion;
        $arr['prod_cate']= $request->cate;
        $arr['prod_type']= $request->product_type;
        if($request->hasFile('img')){
            $img=$request->img->getClientOriginalName();
            $arr['image']=$img;
            $request->img->storeAs('product',$img);
        }

        $product::where('prod_id',$id)->update($arr);
        return redirect('admin/product')->with('flash_noti','Edited Successfully');
    }
    public function getDeleteProduct($id){
        Product::destroy($id);
        return back()->with('flash_noti','Deleted Successfully');
    }
}
