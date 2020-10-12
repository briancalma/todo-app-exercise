@extends('layouts.app')

@section('content')
	@foreach($todos as $todo)
		<div class="card mt-4">
		  <div class="card-body">
		    <h5 class="card-title">
		    	<a href="{{ route('todos.show', $todo) }}"> {{ $todo->title }} </a>
		    </h5>
		    <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
		    <p class="card-text">{{ $todo->description }}</p>
		    <a href="{{ route('todos.edit', $todo) }}" class="card-link">Edit</a>

		    <form style="display: inline;" action="{{ route('todos.destroy', $todo) }}" method="POST" class="ml-4">
		    	@method('DELETE')
		    	@csrf
		    	<a href="javascript::void(0)" class="card-link text-danger" onclick="deleteTodo(this)">Delete</a> 
		    </form>
		  </div>
		</div>
	@endforeach
@endsection