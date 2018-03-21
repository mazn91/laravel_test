  


    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="/">Home</a>
          <a class="blog-nav-item" href="/post">Create a post</a>
          <a class="blog-nav-item" href="/register">Register a user</a>
          <a class="blog-nav-item" href="#">New hires</a>
          <a class="blog-nav-item" href="#">About</a>

          @if(Auth::check())
                <a href="/logout" class="blog-nav-item" style="float: right;">
                  logout
                </a>
          @else
                <a href="/login" class="blog-nav-item" style="float: right;">
                  login
                </a>

          @endif

          <a class="blog-nav-item" style="float: right;" href="/profile"> 

            @if(Auth::check())
               {{ Auth::user()->name }} 
            @endif
          </a>


        </nav>
      </div>
    </div>