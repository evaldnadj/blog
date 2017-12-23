<?php

use App\Http\Controllers\PostController;
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

Route::get('/post', ['as'=>'all-post','uses'=> 'PostController@index']);

Route::get('/post/create', ['as'=>'create-post','uses'=> 'PostController@create']);

Route::get('/post/{id}', ['as'=>'single-post','uses'=> 'PostController@show']);

Route::post('/post', ['as'=>'store-post','uses'=> 'PostController@store']);

Route::post('/comments', ['as'=>'store-comments','uses'=> 'CommentsController@store']);

Route::post('/post/{postId}/comments', ['as'=>'comments-post','uses'=> 'CommentsController@store']);

