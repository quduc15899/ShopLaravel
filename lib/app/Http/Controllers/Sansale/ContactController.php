<?php

namespace App\Http\Controllers\Sansale;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Coupon;
class ContactController extends Controller
{
    //
    public function getContactIndex(){
        $data['coupon']=Coupon::all();
        return view('frontend.contact',$data);
    }
    public function postContactIndex(Request $request){
        $contact= new Contact;
        $contact->ct_job=$request->ct_job;
        $contact->ct_name=$request->name;
        $contact->ct_email=$request->email;
        $contact->ct_message=$request->message;
        $contact->save();
        return back()->withErrors('Cảm ơn bạn ! Chúng tôi sẽ liên hệ sớm lại với bạn .');

    }
}
