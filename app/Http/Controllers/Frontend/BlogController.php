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

    public function show( $title ){
        // dd('แค่เริ่มเปลี่ยน...ก็ช่วยลดขยะไม่ให้ล้นโลกได้นะ');
        // dd(preg_replace('\/.\+*?[^]$(){}=!<>|:-','','asdf sdf'));
            // dd($title);
        $titles = preg_replace('![^ก-๙\pL\pN\s]+!u', '', $title);
        $titless = preg_replace('/\s/', '-', $titles);
        dd($titless);
        $data['datas']      = $this->getOneBlog($tities);

        $data['blogs']      = Blog::where('status',1)->inRandomOrder()->get()->take(3);

        return view('frontend.blog_detail',$data);
    }

}
