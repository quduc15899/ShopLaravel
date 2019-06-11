<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
class ContactController extends Controller
{
    //
    public function getContact(){
        $data['contacts']=Contact::all()->sortBy('update_at');
        return view('backend.contact',$data);
    }
    public function getDeleteContact($id){
        Contact::destroy($id);
        return  back();
    }
}
