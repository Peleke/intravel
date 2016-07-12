<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->user();

        // There are more efficient ways to do this. 
        // But, this illustrates the point for new
        // students.
        $name = $user->name;
        $location = $user->location;
        $age = $user->age;

        return view('home', compact('name', 'location', 'age'));
    }
}
