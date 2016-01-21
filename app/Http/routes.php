<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['uses' => 'PostController@index', 'as' => 'post.index']);

Route::get('create', ['uses' => 'PostController@create', 'as' => 'post.create']);

Route::post('store', ['uses' => 'PostController@store', 'as' => 'post.store']);

Route::get('post/{id}', ['uses' => 'PostController@show', 'as' => 'post.show']);

Route::get('post/{id}/edit', ['uses' => 'PostController@edit', 'as' => 'post.edit']);

Route::post('post/{id}/update', ['uses' => 'PostController@update', 'as' => 'post.update']);

Route::get('post/{id}/delete', ['uses' => 'PostController@delete', 'as' => 'post.delete']);


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
