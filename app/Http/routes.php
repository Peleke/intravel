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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
	// Laravel is smart enough to realize that the
	//   string we pass to view() is the first part
	//   of the name of a file in resources/views.
	//
	//   In this case, it reads 'welcome' as:
	//   The file at resources/views/welcome.blade.php
	return view('welcome');
});

Route::get('/about', 'AboutController@aboutMe');

Route::auth();

Route::get('/home', 'HomeController@index');
