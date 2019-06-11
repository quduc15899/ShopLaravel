<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\AddCateRequest;
use App\Http\Requests\EditCateRequest;
class CategoryController extends Controller
{
    //
    public function getCate(){
        $data['catelist'] = Category::all();
        return view('backend.category',$data);
    }
    public function getEditCate($id){
        $data['cate']=Category::find($id);
        return view('backend.editcategory',$data);
    }
    public function postEditCate(EditCateRequest $request,$id){
        $category= Category::find($id);
        $category->name=$request->name;
        $category->product_type=$request->product_type;
        $category->slug=str_slug($request->name);
        $category->save();
        return redirect()->intended('admin/category');
    }
    public function getAddCate(){
        return view('backend.addcategory');
    }
    public function postAddCate(AddCateRequest $request){
        $category = new Category;
        $category->name = $request->name;
        $category->product_type=$request->product_type;
        $category->slug = str_slug($request->name);
        $category->save();
        return redirect()->intended('admin/category')->with('flash_noti','Added Successfully');
    }
    public function getDeleteCate($id){
        Category::destroy($id);
        return back();
    }

}
