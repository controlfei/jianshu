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
//文章列表页面
Route::get('/posts','PostController@index');
//文章详情页
Route::get('/posts/{post}','PostController@show')->where('post','[0-9]+');
//创建文章
Route::get('/posts/create','PostController@create');
Route::post('/posts','PostController@store');
//编辑文章
Route::get('/posts/{id}','PostController@edit')->where('id','[0-9]+');
Route::post('/posts','PostController@update');
Route::get('/posts/delete','PostController@delete');