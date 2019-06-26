<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Contact;

class ContactController extends Controller
{
    //
    public function index(){
        $data['datas'] = Contact::all();
        return view('backend.contact.list',$data);
    }

    public function store( Request $request ){
        $data = Contact::create($request);

        return response()->json(['status'=>200,'info'=>'success']);
    }
}
