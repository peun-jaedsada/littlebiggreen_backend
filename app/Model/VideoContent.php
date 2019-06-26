<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class VideoContent extends Model
{
    //
    protected $fillable = [
        // 'email'
        'youtube_link',
        'youtube_key',
        'youtube_thumbnail',
        'publish_date',
        'seo_id',
        'seo_title',
        'title',
        'description',
        'status'
    ];

}
