<?php

namespace App\Http\Controllers\Backend\Activity;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Activity\ActivityService;

class ActivityController extends Controller
{
    //
    use ActivityService;

    public function index(){
        $data['datas']      = $this->getAll();
        return view('backend.activity.activity.list',$data);
    }

    public function create(){
        return view('backend.activity.activity.add');
    }

    public function edit( $id ){
        return view('backend.activity.activity.edit',$this->getEdit( $id ));
    }

    public function store( Request $request ){
        $this->addActivity($this->getRequest($request,['_token']));
        return redirect()->route('activity.index');
    }

    public function update( Request $request ,$id){
        $this->updateActivity($id,$this->getRequest($request,['_token']));
        return redirect()->route('activity.index');
    }

    public function destroy( $id,Request $request ){
        $this->destroyActivity($id);
        return redirect()->route('activity.index');
    }
}

