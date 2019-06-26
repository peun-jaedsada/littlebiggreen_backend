<?php

namespace App\Http\Controllers\Backend\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Blog\BlogCatagoryService;

class BlogCatagoryController extends Controller
{
    //
    use BlogCatagoryService;

    public function index(){
        $data['datas'] = $this->getAll();
        return view('backend.blog.blog_catagory.list',$data);
    }

    public function create(){
        return view('backend.blog.blog_catagory.add');
    }

    public function edit( $id ){
        return view('backend.blog.blog_catagory.edit',$this->getEdit( $id ));
    }

    public function store( Request $request ){
        $this->addBlogCatagory($this->getRequest($request,['_token']));
        return redirect()->route('blog_catagory.index');
    }

    public function update( Request $request ,$id){
        $this->updateBlogCatagory($id,$this->getRequest($request,['_token']));
        return redirect()->route('blog_catagory.index');
    }

    public function destroy( $id,Request $request ){
        $this->destroyBlogCatagory($id);
        return redirect()->route('blog_catagory.index');
    }
}
