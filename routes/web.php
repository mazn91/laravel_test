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

// route for deleting a post
Route::get('/post/delete/{id}', 'PostController@delete');


Route::post('/post/{post}/comment', 'CommentController@create');


// route for creeating a new user
Route::get('/register', 'AuthController@create');

// route for creating a new user
Route::post('/register', 'AuthController@store');

// route for showing a logging form
Route::get('/login', 'AuthController@show_login');
// route for logging in a user
Route::post('/login', 'AuthController@login');

// route for logging out a user 
Route::get('/logout', 'AuthController@destroy');


Route::get('/profile', 'ProfileController@show');

Route::get('/profile_update/{id}', 'ProfileController@create');

Route::post('/profile_update/{id}', 'ProfileController@update');


