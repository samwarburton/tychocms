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





Route::get('/', 'PostsController@index');

Route::get('/post/create', 'PostsController@create');
Route::get('/post/{id}/edit', 'PostsController@edit');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('/post', 'PostsController@store');
Route::delete('/post/{id}', 'PostsController@destroy');
Route::patch('/post/{id}', 'PostsController@update');
Route::get('/post/{id}', 'PostsController@show');