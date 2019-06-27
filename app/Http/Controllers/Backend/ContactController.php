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

        \Mail::send('email.contact', ['name'=>$request->name,'info'=>$request->message,'email'=>$request->email], function($message) use ($request){
            $message->to($request->email, $request->name)->subject('Welcome!');
        });
        $data = Contact::create($this->getRequest($request,['_token']));

        return back()->with('message', 'Save Success');
    }
}
