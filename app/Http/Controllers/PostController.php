<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    

    public function show() {
    	return view('post');
    }



    public function create(){

    	$this->validate(request(), [

    		'title' => 'required',
    		'body' => 'required'

    	]);

    	$post = new Post;

    	$post->title = request('title');
    	$post->body = request('body');

    	$post->save();

    	return redirect('/');
    }


    public function show_posts(){

    	$posts = Post::orderBy('id', 'desc')->get();

    	return view('home', compact('posts'));
    }
}
