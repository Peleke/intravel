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
	//   The file at resourves/views/welcome.blade.php
	return view('welcome');
});

Route::get('/about', function () {
	// Our route is nice and tidy.
	return view('about', aboutMeValues ());
});

// Extracting data logic from our route is
// good practice. 
// 
// But, cluttering up our
// routes.php file with functions like this
// isn't . . . There's a better way.
function aboutMeValues() {
	$name     = 'Peleke';
	$age  	  = 23;
	$location = 'Syracuse';

	return compact('name', 'age', 'location');
}