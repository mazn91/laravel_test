   @extends('layouts.master')


        @section('content')
        <div class="col-sm-8 blog-main">

			<h3>Welcome, {{ ucfirst($user->name) }}!</h3><br>


            <ul>
                <li>
                   <strong>Name: </strong> {{ $user->name }}
                </li> 
                <li>
                    <strong>Email: </strong>{{ $user->email }}
                </li>
            </ul>

            <a href="/profile_update/{{ $user->id }}">Update Profile</a><br>
            <a href="#">Reset Password </a>

    


        </div><!-- /.blog-main -->

        @endsection