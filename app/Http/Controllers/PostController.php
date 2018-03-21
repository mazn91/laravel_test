<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostController extends Controller
{
    

    public function __construct() {

    	$this->middleware('auth')->except(['show']);
    }

    public function show() {
    	return view('post');
    }



    public function create(){

    	$this->validate(request(), [

    		'title' => 'required',
    		'body' => 'required'

    	]);

    	$post = new Post;
    	$post->user_id = Auth::user()->id;
    	$post->title = request('title');
    	$post->body = request('body');

    	$post->save();


    	session()->flash('message', 'Your post has been published!');

    	return redirect('/');
    }



    public function show_posts(){

    	$posts = Post::orderBy('created_at', 'desc')->get();

    	return view('home', compact('posts'));
    }



    public function delete($id) {

    	$post = Post::find($id);

    	$post->delete();



    	return redirect('/');
    }
}
