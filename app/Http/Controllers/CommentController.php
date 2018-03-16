<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentController extends Controller
{
    

    public function show(){



    }



    public function create(Post $post){


    	$this->validate(request(), [

    		'comment' => 'required'
    	]);

    	$comment = new Comment;
    	$comment->user_id = 1;
    	$comment->post_id = $post->id;
    	$comment->comment = request('comment');


    	$comment->save();

    	return redirect('/');
    }
}
