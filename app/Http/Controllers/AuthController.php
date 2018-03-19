<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;
use App\User;

class AuthController extends Controller
{
    



    public function create(){
    	return view('/register');
    }



    public function store() {

    	//validate the form
    	$this->validate(request(), [

    		'name' => 'required',
    		'email' => 'required',
    		'password' => 'required|confirmed'
    	]);

    	// create the user
    	$user = new User;

    	$user->name = request('name');

    	$user->email = request('email');

    	$user->password = Hash::make(request('password'));


    	$user->save();


    	// login the user in (after registering the user!)
    	Auth::login($user);


    	// redirect to the home page
    	return redirect('/post');

    }




    public function destroy() {

    	auth()->logout();

    	return redirect('/login');

    }


    public function show_login() {
    	return view('login');
    }



    public function login(Request $request) {

    	$this->validate(request(), [
    		'email' => 'required',
    		'password' => 'required'
    	]);

        if (Auth::attempt(array('email' => $request->email, 'password' => $request->password))){
            return view('/post');
        }else{
            return view('/');
        }


    }














}
