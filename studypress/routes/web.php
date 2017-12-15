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



Auth::routes();



Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => 'auth'], function () {
	//This is the place where (almost) every route needs to be place
	//This protects the application for not logged in users

	Route::get('/', 'HomeController@index');
	Route::get('/profile', 'ProfileController@index');
	Route::get('/block', 'BlockController@index');
	Route::get('/block1', 'BlockController@getBlock1');
	Route::get('/block2', 'BlockController@getBlock2');
	Route::get('/block3', 'BlockController@getBlock3');
	Route::get('/block4', 'BlockController@getBlock4');


    

});

// All my routes that need no authentication