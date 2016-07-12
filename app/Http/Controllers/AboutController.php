<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AboutController extends Controller
{
	public function aboutMe ()
	{
		$name     = 'Peleke';
		$age  	  = 23;
		$location = 'Syracuse';

		return view('about.aboutMe', compact('name', 'age', 'location'));
	}
}
