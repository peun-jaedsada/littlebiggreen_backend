<?php
Route::group(['prefix' => 'blog'],function(){
    include_once(__DIR__.'/blog_catagory.php');
    include_once(__DIR__.'/blog.php');
});