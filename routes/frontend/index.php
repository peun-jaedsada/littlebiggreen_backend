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
use Illuminate\Http\Request;
Route::get('/', 'Frontend\WelcomeController@index');
Route::get('/blog', 'Frontend\BlogController@index')->name('frontend.blog.index');
Route::get('/blog/{id}', 'Frontend\BlogController@show')->name('frontend.blog.show');
Route::get('/video', 'Frontend\VideoController@index')->name('frontend.video.index');
// Route::get('blog', function () {
//     return view('frontend.blog');
// });
// Route::get('blog_detail', function () {
//     return view('frontend.blog_detail');
// });
// Route::get('video', function ( Request $request ) {
//     if(isset($request->url)){
//         $data['key'] = $request->url;
//         return view('frontend.video',$data);
//     }else{
//         return view('frontend.video');
//     }
// });
Route::get('activities', function () {
    return view('frontend.activities');
});
Route::get('contact', function () {
    return view('frontend.contact');
});
Route::get('about_us', function () {
    return view('frontend.about_us');
});