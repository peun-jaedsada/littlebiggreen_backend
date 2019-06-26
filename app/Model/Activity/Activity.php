<?php

namespace App\Model\Activity;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    protected $fillable = [
        'meta_tag',
        'meta_title',
        'meta_description',
        'title',
        'sub_title',
        'start_date',
        'end_date',
        'description',
        'publish_date',
        'picture_title',
        'picture_id',
        'picture_alt',
        'picture',
        'picture_sm',
        'picture_thumbnail_title',
        'picture_thumbnail_id',
        'picture_thumbnail_alt',
        'picture_thumbnail',
        'status'
    ];
}
