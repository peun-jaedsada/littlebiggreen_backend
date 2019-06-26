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

Route::get('mail',function(){
    $data = \Mail::send('welcome', ['key' => 'value'], function($message)
    {
        $message->to('jaedsada.ch@gmail.com', 'John Smith')->subject('Welcome!');
    });
});
Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show')->middleware('auth');
Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload')->middleware('auth');

Route::post('customer','Backend\CustomerController@store');
Route::post('contact','Backend\ContactController@store');
Route::get('logout',function(){
    Auth::logout();
    return redirect()->route('login');
})->name('auth.logout');

Route::group(['prefix' => 'admin'],function(){
    Auth::routes();
    Route::get('dashboard',function(){
        return view('backend.welcome');
    })->name('customer.index');
    Route::get('customer','Backend\CustomerController@index')->name('customer.index');
    Route::get('contact','Backend\ContactController@index')->name('contact.index');
    Route::middleware(['auth'])->group(function () {
        include_once(__DIR__.'/backend/index.php');
    });
});



Route::get('/home', 'HomeController@index')->name('home');
