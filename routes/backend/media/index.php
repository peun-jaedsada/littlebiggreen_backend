<?php
Route::group(['prefix' => 'media'],function(){
    Route::resource('video','Backend\VideoContentController');
});