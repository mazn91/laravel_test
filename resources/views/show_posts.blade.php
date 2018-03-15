 

 <div class="blog-post">

 			@foreach($posts as $post)
            <h2 class="blog-post-title">{{$post->title}}</h2>

            <p class="blog-post-meta">{{ $post->created_at->diffForHumans() }} by <a href="#">Chris</a></p>


            <p>{{ $post->body }}</p>
  			
  			@endforeach
            
 </div><!-- /.blog-post -->


 