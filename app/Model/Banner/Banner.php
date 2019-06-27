<?php

namespace App\Model\Banner;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'banner_name',
        'banner_title',
        'banner_id',
        'banner_alt',
        'banner_img',
        'banner_img_sm',
        'banner_link'
    ];
}