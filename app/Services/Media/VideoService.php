<?php

namespace App\Services\Media;
use App\Model\VideoContent;
use App\Services\SubstrLinkService;

Trait VideoService
{
    use SubstrLinkService;

    function __construct( VideoContent $model ) {
        $this->model = $model;
    }
    function getAll(){
        return $this->model->get();
    }
    
    function getEdit( $id ){
        $data['datas']              = $this->model->find($id);
        $data['catagories']         = \App\Model\Blog\BlogCatagory::all();
        return $data;
    }

    function addVideo( $request ){
        $request['youtube_key']         = $this->parseGetKey($request['youtube_link']);
        $request['youtube_thumbnail']   = $this->parseGetThumbnail($request['youtube_key']);
        isset($request['status']) ? $request['status'] = 1 : $request['status'] = 0;
        \DB::begintransaction();
        try{
            $Blog = $this->model->create($request)->id;
            \DB::commit();
        }catch( \Exception $e ){
            \DB::rollback();
            dd($e->getMessage());
        }
        
        return true;
    }

    function updateVideo( $id,$request ){
        $request['youtube_key']         = $this->parseGetKey($request['youtube_link']);
        $request['youtube_thumbnail']   = $this->parseGetThumbnail($request['youtube_key']);
        isset($request['status']) ? $request['status'] = 1 : $request['status'] = 0;

        \DB::begintransaction();

        try{
            $Blog = $this->model->find($id)->update($request);
            \DB::commit();

        }catch( \Exception $e ){
            \DB::rollback();
            dd($e->getMessage());
        }
        
        return true;
    }

    function destroyBlog ( $id ){
        $this->model->find($id)->delete($id);
        return true;
    }
}       