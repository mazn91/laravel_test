@extends('layouts.master')


@section('content')

	<h2>Post page!</h2>

	<form action="" method="/post">

		{{ csrf_field() }}

	  <div class="form-group">
	    <label for="title">Title:</label>
	    <input type="text" class="form-control" id="title" name="title">
	  </div>

	  <div class="form-group">
	    <label for="body">Post:</label>
	    <textarea name="body" id="body" class="form-control"></textarea>
	  </div>



	  <button type="submit" class="btn btn-default">Publish</button>
	</form>


@endsection