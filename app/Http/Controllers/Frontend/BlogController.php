<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Blog\Blog;

class BlogController extends Controller
{
    //
    public function index( Request $request ){
        $data['blog']       = $this->getBlogFrontendHighlight();
        $data['blogs']      = $this->getBlogFrontend( $request );
        $data['catagories'] = $this->getBlogCatagory(  );
        $data['request']    = $request->all();
        return view('frontend.blog',$data);
    }

    public function show( $id ){
        $data['datas']      = $this->getOneBlog($id);
        $data['blogs']      = Blog::where('status',1)->inRandomOrder()->get()->take(3);

        return view('frontend.blog_detail',$data);
    }

}
