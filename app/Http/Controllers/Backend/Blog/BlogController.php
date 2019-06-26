<?php

namespace App\Http\Controllers\Backend\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Blog\BlogService;

class BlogController extends Controller
{
    //
    use BlogService;

    public function index(){
        $data['datas']      = $this->getAll();
        return view('backend.blog.blog.list',$data);
    }

    public function create(){
        $data['catagories'] = \App\Model\Blog\BlogCatagory::all();
        return view('backend.blog.blog.add',$data);
    }

    public function edit( $id ){
        return view('backend.blog.blog.edit',$this->getEdit( $id ));
    }

    public function store( Request $request ){
        $this->addBlog($this->getRequest($request,['_token']));
        return redirect()->route('blog.index');
    }

    public function update( Request $request ,$id){
        $this->updateBlog($id,$this->getRequest($request,['_token']));
        return redirect()->route('blog.index');
    }
    
    public function destroy( $id ){
        $this->destroyBlog($id);
        return redirect()->route('blog.index');
    }
}

