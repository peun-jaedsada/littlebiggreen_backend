<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Banner\BannerService;

class BannerController extends Controller
{
    //
    use BannerService;

    public function index(){
        $data['datas'] = $this->getAll();
        return view('backend.banners.list',$data);
    }

    public function create(){
        return view('backend.banners.add');
    }

    public function edit( $id ){
        return view('backend.banners.edit',$this->getEdit( $id ));
    }

    public function store( Request $request ){
        $this->addBanner($this->getRequest($request,['_token']));
        return redirect()->route('banner.index');
    }

    public function update( Request $request ,$id){
        $this->updateBanner($id,$this->getRequest($request,['_token']));
        return redirect()->route('banner.index');
    }
    public function destroy( $id ){
        $this->destroyBanner($id);
        return redirect()->route('banner.index');
    }

}
