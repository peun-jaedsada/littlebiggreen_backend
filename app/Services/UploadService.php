<?php

namespace App\Services;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\File;

Trait UploadService
{

    public function uploadOne( $name,$folder1,$file ){
        if( isset($name) ){
            $image      = $name;
            $folder     = $folder1;
            $fileName   = $file.'_'.time() . '.' . $image->getClientOriginalExtension();
            return self::upload($folder1,$fileName,$name);
        }
    }

    public function upload($folder, $filename,$moveto)
    {
        $name = !is_null($filename) ? $filename : str_random(25);
        $moveto->move(base_path('public/upload_img/'.$folder), $filename);
        return $name;
    }
}