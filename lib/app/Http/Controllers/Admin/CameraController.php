<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Models\Camera;
use DB;
class CameraController extends Controller
{
    //
    public function getIndex(){
        $data['cameras']=DB::table('camera')
                            ->get();
        return view('backend.camera',$data);
    }
    public function getAdd(){
        return view('backend.addcamera');
    }
    public function postAdd(AddProductRequest $request){
        $filename = $request->img->getClientOriginalName();
        $product= new Camera;
        $product->cm_name=$request->name;
        $product->product='camera';
        $product->cm_slug=str_slug($request->name);
        $product->cm_status=$request->status;
        $product->cm_description=$request->description;
        $product->cm_price=$request->price;
        $product->cm_type=$request->product_type ;
        $product->cm_type_slug=str_slug($request->product_type) ;
        $product->cm_promotion=$request->promotion;
        $product->cm_image=$filename;
        $product->save();
        $request->img->storeAs('camera',$filename);
        return  redirect()->intended('admin/camera')->with('flash_noti','Added Successfully');

    }
    public function getEdit($id){
        $data['camera']=Camera::find($id);
        return view('backend.editcamera',$data);
    }
    public function postEdit(AddProductRequest $request,$id ){
        $camera= new Camera;
        $arr['cm_name']= $request->name;
        $arr['product']= 'camera';
        $arr['cm_slug']= str_slug($request->name);
        $arr['cm_price']= $request->price;
        $arr['cm_status']= $request->status;
        $arr['cm_description']= $request->description;
        $arr['cm_promotion']= $request->promotion;
        $arr['cm_type']= $request->product_type;
        $arr['cm_type_slug']= str_slug($request->product_type);
        if($request->hasFile('img')){
            $img=$request->img->getClientOriginalName();
            $arr['cm_image']=$img;
            $request->img->storeAs('camera',$img);
        }

        $camera::where('cm_id',$id)->update($arr);
        return redirect('admin/camera')->with('flash_noti','Edited Successfully');
    }
    public function getDelete($id){
        Camera::destroy($id);
        return back()->with('flash_noti','Deleted Successfully');
    }
}
