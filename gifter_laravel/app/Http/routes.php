<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'users' => 'UserController',
	'shop' => 'GiftsContoller',
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('users','UserController@getUsers');
Route::resource('shop-items','GiftsContoller@getItems');
Route::resource('popular','GiftsContoller@getPopular');
Route::resource('user-gifts','GiftsContoller@getUserGifts');
Route::resource('news','newsContoller');
