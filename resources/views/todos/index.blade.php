@extends('layouts.app')

@section('content')
	@foreach($todos as $todo)
		<div class="card mt-4">
		  <div class="card-body">
		    <h5 class="card-title">{{ $todo->title }}</h5>
		    <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
		    <p class="card-text">{{ $todo->description }}</p>
		    <a href="{{ route('todos.edit', $todo) }}" class="card-link">Edit</a>
		    <a href="#" class="card-link text-danger">Delete</a> 
		  </div>
		</div>
	@endforeach
@endsection