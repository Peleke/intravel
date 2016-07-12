<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class UserController extends Controller
{
    //
    public function update (Request $request, User $user)
    {
    	// Save
    	$user->update($request->all());

    	// Go back to display new info
    	return back();
    }
}
