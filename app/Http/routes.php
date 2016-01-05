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
Route::get('users/dashboard', 'UserController@index');
Route::get('users/tours', 'UserController@getTours');
Route::get('users/addtour', 'UserController@addTour');
Route::get('admin/dashboard', 'UserController@index');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::post('users/savetour', 'UserController@saveTour');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
