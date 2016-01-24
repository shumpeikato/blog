<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
	//認証
	// 認証のルート定義…
	Route::get('auth/login', 'Auth\AuthController@getLogin');
	Route::post('auth/login', 'Auth\AuthController@postLogin');
	Route::get('auth/logout', 'Auth\AuthController@getLogout');
	
	// 登録のルート定義…
	Route::get('auth/register', 'Auth\AuthController@getRegister');
	Route::post('auth/register', 'Auth\AuthController@postRegister');
});

//ブログ画面
Route::get('home', 'BlogController@home');
Route::get('show/{id}', 'BlogController@show');
Route::post('comment/{id}', 'BlogController@comment');

//admin
Route::group(['prefix' => 'admin/', 'middleware' => ['auth'],], function() {
//	Route::get('home', 'AdminController@home');
//	Route::get('create', 'AdminController@create');
//	Route::post('create', 'AdminController@store');
//	Route::get('edit/{id}' , 'AdminController@edit');
//	Route::patch('update', 'AdminController@update');
//	Route::delete('destroy', 'AdminController@destroy');
});
Route::group(['prefix' => 'admin/'], function() {
        Route::get('home', 'AdminController@home');
	Route::get('create', 'AdminController@create');
	Route::post('create', 'AdminController@store');
	Route::get('edit/{id}' , 'AdminController@edit');
	Route::patch('update/{id}', 'AdminController@update');
	Route::post('destroy/{id}', 'AdminController@destroy');
});


