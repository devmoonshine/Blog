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

Route::get('/', [
	'as' => 'home',
	'uses' => 'PostsController@index'
]);

Route::get('/post/{post}', [
	'as' => 'post.show',
	'uses' => 'PostController@show'
]);

Route::get('/post/{tag}', function() {
	return view('home');
});

Route::get('/posts/{tag}', [
    'as' => 'posts.tagged',
    'uses' => 'PostsController@tagged'
]);