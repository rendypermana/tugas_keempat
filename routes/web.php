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


Route::get('/', function(){ return redirect('/article'); });
Route::resource('/article','ArticleController');
Route::get('/ajax/{rp}', 'ArticleController@getAjax');
Route::get('admin', 'ArticleController@admin');
Route::get('post', 'ArticleController@post');
Route::get('comments', 'ArticleController@comment');
Route::resource('/comment', 'CommentController');
Route::get('excel', 'ArticleController@importExport');
Route::get('downloadExcel/{type}', 'ArticleController@downloadExcel');
Route::post('importExcel', 'ArticleController@importExcel');
Route::resource('/user', 'UserController');
Route::resource('signup', 'UserController@signup');
Route::post('sign', 'UserController@signup_store');
Route::get('cari', 'ArticleController@cari');
 	
//Route::get('signup', 'UserController@signup');
//Route::get('signup', 'UserController@signup')->name('signup');

//Route::get('login', 'SessionController@login')->name('login');
//Route::post('login', 'SessionController@login_store');
//Route::get('logout', 'SessionsController@logout')->name('logout')

//Route::resource('/sesion', 'SessionsControllerp');





Route::get ( '/redirect/{service}', 'SocialAuthController@redirect' );
Route::get ( '/callback/{service}', 'SocialAuthController@callback' );