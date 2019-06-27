<?php

namespace App\Model\Blog;

use Illuminate\Database\Eloquent\Model;

class BlogCatagory extends Model
{
    //
    protected $fillable = [
        'name',
        'alias_name',
        'status',
        'color',
        'blog_highlight'
    ];
}
