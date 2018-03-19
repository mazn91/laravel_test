        @extends('layouts.master')


        @section('content')
        <div class="col-sm-8 blog-main">

    

        	<strong>Registration</strong><br>


        	<form method="post" action="/register">

        		{{ csrf_field() }}

        		<div class="form-group">
        			
        			<label for="name">User Name:</label>
        			<input class="form-control" type="text" name="name" id="name">	

        		</div>


        		<div class="form-group">
        			
        			<label for="email">Email:</label>
        			<input type="text" name="email" id="email" class="form-control">

        		</div>


        		<div class="form-group">

        			<label for="password">Password:</label>
        			<input type="password" name="password" id="password" class="form-control">
        		</div>


        		<div class="form-group">
        			
        			<label for="password_confirmation">Password Confirmation:</label>
        			<input type="password" name="password_confirmation" id="password_confirmation" class="form-control">

        		</div>

        		<div class="form-group">
					
        			<button type="submit" class="btn btn-primary">Register</button>

        		</div>



        		<div class="form-group">
        			
  

        				@include('layouts.errors')

        		</div>
        		
        	</form>





        </div><!-- /.blog-main -->

        @endsection