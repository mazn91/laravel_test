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


Route::get('/post', 'PostController@show'); 

Route::post('/post', 'PostController@create'); 

Route::get('/', 'PostController@show_posts');


Route::post('/post/{post}/comment', 'CommentController@create');





