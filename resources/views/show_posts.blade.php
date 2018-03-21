 

 <div class="blog-post">

 			@foreach($posts as $post)
 				
 				<div class="posts">
 					
 				
		            <h2 class="blog-post-title">{{$post->title}}</h2>

		            <p class="blog-post-meta">{{ $post->created_at->diffForHumans() }} by <a href="#">{{ ucfirst($post->user->name) }}</a></p>


		            <p>{{ $post->body }}</p>



		            @if($post->user_id == Auth::user()->id)

		            	<a href="/post/delete/{{ $post->id }}" style="color: red">Delete</a>

		            @endif

		            <hr>

	            </div>

	            	<div class="comments">
	            		@foreach($post->comments as $comment)

	            			<div class="alert alert-info">
	            				<strong>
	            					{{ $comment->created_at->diffForHumans() }} by {{ ucfirst($comment->user->name) }}:
	            				</strong>
	            				{{ $comment->comment }}
	            				
	            			</div>	


	            		@endforeach
	            	</div>




	            <div class="add_comment">

	  				<form action="/post/{{ $post->id }}/comment" method="post">

								{{ csrf_field() }}

						  <div class="form-group">
						    <textarea name="comment" id="comment" class="form-control" placeholder="Your comment here!"></textarea>
						    <button type="submit" class="btn btn-primary">Add Comment</button>
						  </div>

					</form>

					@include('layouts.errors')

  				</div><br><br><br>
  			
  			@endforeach




            
 </div>

 