@extends('layouts.app')

@section('content')
	<div class="card mt-4">
		<div class="card-body">
			<h5 class="card-title">UPDATE Todo</h5>

			<form action="{{ route('todos.update', $todo) }}" method="POST">
			  @method('PATCH')
			  <div class="form-group">
			    <label>Title</label>
			    <input name="title" type="text" class="form-control" placeholder="Some things here" value="{{ $todo->title }}" required>
			  </div>
			  @csrf
			  <div class="form-group">
			    <label>Description</label>
			    <textarea name="description" class="form-control" rows="3" placeholder="Some Description">{{ $todo->description }}</textarea>
			  </div>

			  <input type="submit" value="Save" class="btn btn-primary">
			  <a href="{{ route('todos.index') }}" class="btn btn-warning">Back</a>
			</form>
		</div>
	</div>
@endsection