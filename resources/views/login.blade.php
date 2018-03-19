   @extends('layouts.master')


        @section('content')
        <div class="col-sm-8 blog-main">

			<strong>Login</strong><br>


        	<form method="post" action="/login">

        		{{ csrf_field() }}


        		<div class="form-group">
        			
        			<label for="email">Email:</label>
        			<input type="text" name="email" id="email" class="form-control">

        		</div>


        		<div class="form-group">

        			<label for="password">Password:</label>
        			<input type="password" name="password" id="password" class="form-control">
        		</div>



        		<div class="form-group">
					
        			<button type="submit" class="btn btn-primary">Login</button>

        		</div>



        		<div class="form-group">
        			
  

        				@include('layouts.errors')

        		</div>
        		
        	</form>


    


        </div><!-- /.blog-main -->

        @endsection