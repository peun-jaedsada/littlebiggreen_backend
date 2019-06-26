<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Customer;

class CustomerController extends Controller
{
    //
    public function index(){
        $data['datas'] = Customer::all();
        return view('backend.customer.list',$data);
    }

    public function create(){
        return view('backend.banners.add');
    }

    public function edit( $id ){
        return view('backend.banners.edit',$this->getEdit( $id ));
    }

    public function store( Request $request ){
        $data = Customer::create($request);

        return response()->json(['status'=>200,'info'=>'success']);
    }

}
