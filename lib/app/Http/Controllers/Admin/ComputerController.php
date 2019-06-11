<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Models\Computer;
use DB;
class ComputerController extends Controller
{
    //
    public function getIndex(){
        $data['computers']=DB::table('computer')
                            ->get();
        return view('backend.computer',$data);
    }
    public function getAdd(){
        return view('backend.addcomputer');
    }
    public function postAdd(AddProductRequest $request){
        $filename = $request->img->getClientOriginalName();
        $product= new Computer;
        $product->cp_name=$request->name;
        $product->product='computer';
        $product->cp_slug=str_slug($request->name);
        $product->cp_status=$request->status;
        $product->cp_description=$request->description;
        $product->cp_price=$request->price;
        $product->cp_type=$request->product_type ;
        $product->cp_type_slug=str_slug($request->product_type) ;
        $product->cp_promotion=$request->promotion;
        $product->cp_image=$filename;
        $product->save();
        $request->img->storeAs('computer',$filename);
        return  redirect()->intended('admin/computer')->with('flash_noti','Added Successfully');

    }
    public function getEdit($id){
        $data['computer']=Computer::find($id);
        return view('backend.editcomputer',$data);
    }
    public function postEdit(AddProductRequest $request,$id ){
        $computer= new Computer;
        $arr['cp_name']= $request->name;
        $arr['product']= 'computer';
        $arr['cp_slug']= str_slug($request->name);
        $arr['cp_price']= $request->price;
        $arr['cp_status']= $request->status;
        $arr['cp_description']= $request->description;
        $arr['cp_promotion']= $request->promotion;
        $arr['cp_type']= $request->product_type;
        $arr['cp_type_slug']= str_slug($request->product_type);
        if($request->hasFile('img')){
            $img=$request->img->getClientOriginalName();
            $arr['cp_image']=$img;
            $request->img->storeAs('computer',$img);
        }

        $computer::where('cp_id',$id)->update($arr);
        return redirect('admin/computer')->with('flash_noti','Edited Successfully');
    }
    public function getDelete($id){
        Computer::destroy($id);
        return back()->with('flash_noti','Deleted Successfully');
    }
}
