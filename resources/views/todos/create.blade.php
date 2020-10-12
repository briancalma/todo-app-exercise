@extends('layouts.app')

@section('content')
	<div class="card mt-4">
		<div class="card-body">
			<h5 class="card-title">Create New Todo</h5>

			<form action="{{ route('todos.store') }}" method="POST">
			  <div class="form-group">
			    <label>Title</label>
			    <input name="title" type="text" class="form-control" placeholder="Some things here" required>
			  </div>
			  @csrf
			  <div class="form-group">
			    <label>Description</label>
			    <textarea name="description" class="form-control" rows="3" placeholder="Some Description"></textarea>
			  </div>

			  <input type="submit" value="Save" class="btn btn-primary">
			  <a href="{{ route('todos.index') }}" class="btn btn-warning">Back</a>
			</form>
		</div>
	</div>
@endsection