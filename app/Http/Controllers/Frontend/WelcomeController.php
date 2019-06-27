<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\SubstrLinkService;

class WelcomeController extends Controller
{
    //
    use SubstrLinkService;
    public function index(){
        $data['banner'] = $this->getBanner(1);
        if(isset($data['banner']->banner_link)){
            $data['key']    = $this->parseGetKey($data['banner']->banner_link);
        }
        $data['blog'] = \App\Model\Blog\Blog::select('blogs.*','blog_catagories.name as cat_name','blog_catagories.alias_name as cat_alias_name','blog_catagories.color as cat_color')->leftjoin('blog_catagories','blog_catagories.id','blogs.catagory_id')->where('blog_highlight',1)->first();
        $data['blogs'] = \App\Model\Blog\Blog::select('blogs.*','blog_catagories.name as cat_name','blog_catagories.alias_name as cat_alias_name','blog_catagories.color as cat_color')->leftjoin('blog_catagories','blog_catagories.id','blogs.catagory_id')
                        ->whereNull('blog_highlight')
                        ->Orwhere('blog_highlight','!=',1)
                        ->get();
        
        return view('frontend.welcome',$data);
    }
}
