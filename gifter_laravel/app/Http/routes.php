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

Route::post('gift_shop', 'GiftsContoller@store');
Route::delete('gift_shop/{id}', 'GiftsContoller@destroy');

Route::resource('users','UserController@getUsers');
Route::resource('shop-items','GiftsContoller@getItems');
Route::resource('popular','GiftsContoller@getPopular');
Route::resource('user-gifts','GiftsContoller@getUserGifts');
Route::resource('galery','GiftsContoller@getGalery');

