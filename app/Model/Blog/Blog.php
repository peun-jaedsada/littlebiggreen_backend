<?php

namespace App\Model\Blog;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $fillable = [
        'catagory_id',
        'blog_meta_tag',
        'blog_meta_title',
        'blog_meta_description',
        'blog_title',
        'blog_subtitle',
        'blog_picture_title',
        'blog_picture_alt',
        'blog_picture_id',
        'blog_picture',
        'blog_picture_sm',
        'blog_picture_title_thumbnail',
        'blog_picture_alt_thumbnail',
        'blog_picture_id_thumbnail',
        'blog_picture_thumbnail',
        'blog_description',
        'status',
        'blog_rewrite'
    ];
}
