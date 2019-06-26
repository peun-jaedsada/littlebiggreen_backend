<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Media\VideoService;
class VideoContentController extends Controller
{
    //
    use VideoService;

    public function index(){
        $data['datas'] = $this->getAll();
        return view('backend.media.list',$data);
    }

    public function create(){
        return view('backend.media.add');
    }

    public function store( Request $request ){
        $this->addVideo($this->getRequest($request,['_token']));

        return redirect()->route('video.index');
    }
    public function edit($id){
        return view('backend.media.edit',$this->getEdit($id));
    }
    public function update( $id,Request $request ){
        $this->updateVideo($id,$this->getRequest($request,['_token']));
        return redirect()->route('video.index');
    }

    public function destroy( $id,Request $request ){
        $this->destroyBlog($id);
        return redirect()->route('video.index');
    }
}
