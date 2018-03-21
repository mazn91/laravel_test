<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class ProfileController extends Controller
{
    

	//show profile
    public function show() {

    	$user = Auth::user();

    	return view('profile', compact('user'));
    }






    	// show form to update a profile
    public function create($id){

    	$user = User::find($id);


    	return view('profile_update', compact('user'));
    }







    // update the user

    public function update(Request $request, $id){

    	$user = User::find($id);

    	$user->name = $request->name;

    	$user->email = $request->email;

    	$user->save();

    	return redirect('profile');

    }
}
