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
	// We can create a variable, called $VARIABLE . . . 
	$name = 'Peleke';

	// . . . And pass it to the view using compact().

	// We can also just do what compact is doing ourselves:
	// return view('about', ['name' => $name]);

	// . . . But I prefer it this way. It's more compact.
	return view('about', compact('name'));
});