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

Route::get('/', 'PostsController@index')->name('home');
Route::get('/home', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts', 'PostsController@showAll');
Route::get('/posts/{post}', 'PostsController@show');
Route::get('/posts/tags/{tag}', 'TagsController@index');

Route::get('/register', 'UsersController@create');
Route::post('/register', 'UsersController@store');
Route::get('/login', [ 'as' => 'login', 'uses' => 'SessionsController@create']);
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

Route::get('/users', 'UsersController@index');
Route::get('/users/{user}', 'UsersController@show');

Route::post('/posts', 'PostsController@store');
Route::post('/posts/{post}/comments', 'CommentsController@store');
