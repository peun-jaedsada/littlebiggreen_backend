<?php

namespace App\Services\VideoContent;
use App\Model\VideoContent;
use App\Services\SubstrService;

Trait VideoService
{
    use SubstrService;

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

    function addBlog( $request ){
        $request['blog_picture']        = $this->uploadOne($request['blog_picture'],'blog','logo');
        $request['blog_picture_thumbnail']        = $this->uploadOne($request['blog_picture_thumbnail'],'blog','logo');
        $request['blog_picture_sm']     = $this->uploadOne($request['blog_picture_sm'],'blog','logo');

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

    function updateBlog( $id,$request ){
        if(isset($request['blog_picture'])){
            $request['blog_picture']        = $this->uploadOne($request['blog_picture'],'blog','logo');
        }
        if(isset($request['blog_picture_sm'])){
            $request['blog_picture_sm']        = $this->uploadOne($request['blog_picture_sm'],'blog','logo');
        }
        if(isset($request['blog_picture_thumbnail'])){
            $request['blog_picture_thumbnail']        = $this->uploadOne($request['blog_picture_thumbnail'],'blog','logo');
        }

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