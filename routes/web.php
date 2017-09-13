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

// Home page
Route::get('/',[
    'uses' => 'PostController@index'
]);


Route::get('/blog/show', function () {
    return view('blog.show');
});
Auth::routes();

Route::get('/home', 'Backend\HomeController@index')->name('home');


Route::resource('/backend/blog', 'Backend\BlogController');