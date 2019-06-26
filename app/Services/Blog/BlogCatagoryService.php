<?php

namespace App\Services\Blog;
use App\Model\Blog\BlogCatagory;

Trait BlogCatagoryService
{
    function __construct( BlogCatagory $model ) {
        $this->model = $model;
    }
    function getAll(){
        return $this->model->get();
    }
    function getEdit( $id ){
        $data['datas']              = $this->model->find($id);
        return $data;
    }

    function addBlogCatagory( $request ){
        isset($request['status']) ? $request['status'] = 1 : $request['status'] = 0;
        \DB::begintransaction();
        try{
            $BlogCatagory = $this->model->create($request)->id;
            \DB::commit();
        }catch( \Exception $e ){
            \DB::rollback();
            dd($e->getMessage());
        }
        
        return true;
    }

    function updateBlogCatagory( $id,$request ){
        isset($request['status']) ? $request['status'] = 1 : $request['status'] = 0;
        \DB::begintransaction();
        try{
            $BlogCatagory = $this->model->find($id)->update($request);
            \DB::commit();

        }catch( \Exception $e ){
            \DB::rollback();
            dd($e->getMessage());
        }
        
        return true;
    }

    function destroyBlogCatagory ( $id ){
        $this->model->find($id)->delete($id);
        return true;
    }
}       