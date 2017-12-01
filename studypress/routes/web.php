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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

<<<<<<< HEAD
Route::get('/home', 'HomeController@index')->name('home');
=======


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => 'auth'], function () {
	//This is the place where (almost) every route needs to be place
	//This protects the application for not logged in users

	Route::get('/', 'HomeController@index');

    

});

// All my routes that need no authentication
>>>>>>> 949295d1f45d6a8f4cc45ddf59077c212aebffd7
