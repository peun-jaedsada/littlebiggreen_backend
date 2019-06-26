<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');

Route::post('customer','Backend\CustomerController@store');
Route::post('contact','Backend\ContactController@store');

Route::group(['prefix' => 'admin'],function(){
    Route::get('customer','Backend\CustomerController@index')->name('customer.index');
    Route::get('contact','Backend\ContactController@index')->name('contact.index');
    include_once(__DIR__.'/backend/index.php');
});

