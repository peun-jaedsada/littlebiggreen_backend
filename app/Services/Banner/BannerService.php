<?php

namespace App\Services\Banner;
use App\Model\Banner\Banner;
use App\Services\UploadService;

Trait BannerService
{
    use UploadService;

    function __construct( Banner $model ) {
        $this->model = $model;
    }
    function getAll(){
        return $this->model->get();
    }
    function getEdit( $id ){
        $data['datas']              = $this->model->find($id);
        return $data;
    }

    function addBanner( $request ){
        $request['banner_img']        = $this->uploadOne($request['banner_img'],'banner','logo');
        $request['banner_img_sm']     = $this->uploadOne($request['banner_img_sm'],'banner','logo');

        \DB::begintransaction();
        try{
            $banner = $this->model->create($request)->id;
            \DB::commit();
        }catch( \Exception $e ){
            \DB::rollback();
            dd($e->getMessage());
        }
        
        return true;
    }

    function updateBanner( $id,$request ){
        if(isset($request['banner_img'])){
            $request['banner_img']        = $this->uploadOne($request['banner_img'],'banner','logo');
        }
        if(isset($request['banner_img_sm'])){
            $request['banner_img_sm']        = $this->uploadOne($request['banner_img_sm'],'banner','logo');
        }

        isset($request['banner_list']) ? $request['banner_list'] = 1 : $request['banner_list'] = 0;
        \DB::begintransaction();
        try{
            $banner = $this->model->find($id)->update($request);
            \DB::commit();

        }catch( \Exception $e ){
            \DB::rollback();
            dd($e->getMessage());
        }
        
        return true;
    }

    function destroyBanner ( $id ){
        $this->model->find($id)->delete($id);
        return true;
    }
}       