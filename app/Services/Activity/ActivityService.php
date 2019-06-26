<?php

namespace App\Services\Activity;
use App\Model\Activity\Activity;
use App\Services\UploadService;

Trait ActivityService
{
    use UploadService;

    function __construct( Activity $model ) {
        $this->model = $model;
    }
    function getAll(){
        return $this->model->get();
    }
    function getEdit( $id ){
        $data['datas']              = $this->model->find($id);
        return $data;
    }

    function addActivity( $request ){
        $request['picture']             = $this->uploadOne($request['picture'],'activity','logo');
        $request['picture_sm']          = $this->uploadOne($request['picture_sm'],'activity','logo');
        $request['picture_thumbnail']   = $this->uploadOne($request['picture_thumbnail'],'activity','logo');
        isset($request['status']) ? $request['status'] = 1 : $request['status'] = 0;
        
        \DB::begintransaction();
        try{
            $Activity = $this->model->create($request)->id;
            \DB::commit();
        }catch( \Exception $e ){
            \DB::rollback();
            dd($e->getMessage());
        }
        
        return true;
    }

    function updateActivity( $id,$request ){
        if(isset($request['picture'])){
            $request['picture']        = $this->uploadOne($request['picture'],'activity','logo');
        }
        if(isset($request['picture_sm'])){
            $request['picture_sm']        = $this->uploadOne($request['picture_sm'],'activity','logo');
        }
        if(isset($request['picture_thumbnail'])){
            $request['picture_thumbnail']        = $this->uploadOne($request['picture_thumbnail'],'activity','logo');
        }
        
        isset($request['status']) ? $request['status'] = 1 : $request['status'] = 0;
        \DB::begintransaction();

        try{
            $Activity = $this->model->find($id)->update($request);
            \DB::commit();

        }catch( \Exception $e ){
            \DB::rollback();
            dd($e->getMessage());
        }
        
        return true;
    }

    function destroyActivity ( $id ){
        $this->model->find($id)->delete($id);
        return true;
    }
}       