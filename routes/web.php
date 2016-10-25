<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
    Route::get('/', 'PostsController@index');
    Route::resource('posts', 'PostsController', ['as' => 'admin']);
    // as => admin = 'admin.posts...'
    // Route::resource('posts', 'PostsController', ['names' => ['index' => 'admin_post_index']]);
});
