<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\Blog\Blog;
use App\Model\Blog\BlogCatagory;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getRequest( $request ,$unset ){
        $request = $request->all();
        foreach( $unset as $item ){
            unset($request[$item]);
        }
        return $request;
    }

    public function getBlogCatagory(){
        $data['blog_catagories'] = \App\Model\Blog\BlogCatagory::all();
        return $data['blog_catagories'];
    }

    public function getBlogFrontendHighlight(){
        $data['blog'] = \App\Model\Blog\Blog::select('blogs.*','blog_catagories.name as cat_name','blog_catagories.alias_name as cat_alias_name','blog_catagories.color as cat_color')->leftjoin('blog_catagories','blog_catagories.id','blogs.catagory_id')->where('blog_highlight',1)->first();
        return $data['blog'];
    }

    public function getOneBlog($title){
        $data['blogs'] = \App\Model\Blog\Blog::select('blogs.*','blog_catagories.name as cat_name','blog_catagories.alias_name as cat_alias_name','blog_catagories.color as cat_color')->leftjoin('blog_catagories','blog_catagories.id','blogs.catagory_id')
        ->where('blogs.blog_title','LIKE','%'.$title.'%')
        ->first();
        
        return $data['blogs'];
    }

    public function getBlogFrontend( $request ){
        if(isset($request->alias) && $request->alias != 'ALL'){
            $data['blogs'] = \App\Model\Blog\Blog::select('blogs.*','blog_catagories.name as cat_name','blog_catagories.alias_name as cat_alias_name','blog_catagories.color as cat_color')->leftjoin('blog_catagories','blog_catagories.id','blogs.catagory_id')
            ->where('blog_catagories.alias_name',$request->alias)
            ->whereNull('blogs.blog_highlight')
            ->Orwhere('blogs.blog_highlight','!=',1)
            ->get();
        // }
        // elseif( $request->alias == 'ALL'){
        //     $data['blogs'] = \App\Model\Blog\Blog::select('blogs.*','blog_catagories.name as cat_name','blog_catagories.alias_name as cat_alias_name','blog_catagories.color as cat_color')->leftjoin('blog_catagories','blog_catagories.id','blogs.catagory_id')
        //     ->whereNull('blog_highlight')
        //     ->Orwhere('blog_highlight','!=',1)
        //     ->paginate(6);
        }else{
            $data['blogs'] = \App\Model\Blog\Blog::select('blogs.*','blog_catagories.name as cat_name','blog_catagories.alias_name as cat_alias_name','blog_catagories.color as cat_color')->leftjoin('blog_catagories','blog_catagories.id','blogs.catagory_id')
                            ->whereNull('blog_highlight')
                            ->Orwhere('blog_highlight','!=',1)
                            ->paginate(6);
        }

        return $data['blogs'];
    }

    public function getBanner( $id ){
        return \App\Model\Banner\Banner::find($id);
    }
}
