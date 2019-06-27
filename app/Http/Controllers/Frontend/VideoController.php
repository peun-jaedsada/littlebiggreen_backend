<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\VideoContent;

class VideoController extends Controller
{
    //
    public function index( Request $request ){
        $data['banner'] = $this->getBanner(2);
        $datas = VideoContent::get()->map(function($info){ return date('Y',strtotime($info->created_at)); });
        $years = [];
        foreach( $datas as $year ){
            if( !in_array( $year ,$years ) ){
                array_push( $years,$year);
            }
        }
        $data['years'] = $years;
        if(isset($request->year) && $request->year != 0){
            \Session::put(['year'=>$request->year]);

            $data['videos'] = VideoContent::whereYear('created_at',session()->get('year'))->get();
            
            $data['key']    = VideoContent::whereYear('created_at',session()->get('year'))->first()->youtube_key;
            $data['info']   = VideoContent::where('youtube_key',VideoContent::whereYear('created_at',session()->get('year'))->first()->youtube_key)->whereYear('created_at',session()->get('year'))->first();
        }elseif(isset($request->year) && $request->year == 0){
            \Session::forget('year');
            $data['videos'] = VideoContent::where('status',1)->get();
            $data['key']    = VideoContent::first()->youtube_key;
            $data['info']  = VideoContent::where('youtube_key',VideoContent::first()->youtube_key)->first();
        }else{
            $data['videos'] = VideoContent::where('status',1)->get();
            if(isset($request->url)){
                $data['key']    = $request->url;
                $data['info']  = VideoContent::where('youtube_key',$request->url)->first();
            }else{
                $data['key']    = VideoContent::first()->youtube_key;
                $data['info']  = VideoContent::where('youtube_key',VideoContent::first()->youtube_key)->first();
            }
        }
        
        return view('frontend.video',$data);
    }
}
