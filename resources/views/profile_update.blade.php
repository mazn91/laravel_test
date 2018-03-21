   @extends('layouts.master')


        @section('content')
        <div class="col-sm-8 blog-main">

			<strong>Update Profile</strong><br>


        	<form method="post" action="/profile_update/{{ $user->id }}">

        		{{ csrf_field() }}





                <div class="form-group">
                    
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">

                </div>



        		<div class="form-group">
        			
        			<label for="email">Email:</label>
        			<input type="text" name="email" id="email" class="form-control" value="{{ $user->email }}">

        		</div>



        		<div class="form-group">
					
        			<button type="submit" class="btn btn-primary" ">Update</button>

        		</div>



        		<div class="form-group">
        			
  

        				@include('layouts.errors')

        		</div>
        		
        	</form>


    


        </div><!-- /.blog-main -->

        @endsection