<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'DefaultController@index');

Route::get('users/{id}', 'UserController@getShow');
Route::put('users/{id}', 'UserController@putUpdate');
Route::post('users/{id}/image', ['as' => 'uploadImage', 'uses' => 'UserController@postUploadPersonalImage']);
Route::post('users/{id}/cover-image', ['as' => 'uploadCoverImage', 'uses' => 'UserController@postUploadCoverImage']);

Route::post('posts', 'PostController@postCreate');
