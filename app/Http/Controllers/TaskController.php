<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    

	//view tasks page
    public function tasks(){
    	return view('tasks'); 
    }

    


}
