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

/* Front section */
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'guest', 'prefix' => 'front', 'namespace' => 'Front'], function() {
    Route::get('/', 'HomeController@index');
    Route::get('/articles', 'ArticlesController@index');
});

/* Admin section*/

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'namespace' => 'Admin'], function() {
    Route::get('/', 'HomeController@index');
    Route::get('/articles', 'ArticlesController@index');
});





Auth::routes();


Route::get('/articles', 'HomeController@show');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

Route::post('/posts', 'PostsController@store');
Route::post('/posts/{post}/comments', 'CommentsController@store');




