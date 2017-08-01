@extends('layouts.app')


@section('body')
	<br>
	<div class="col-lg-4 col-lg-offset-4">
			<center><h1> Todo Lists </h1></center>
			<br>
			<br>
			@if($todos)
			<ul class="list-group">
			@foreach ($todos as $todo)
			  <li class="list-group-item">
			    {{$todo->body ? $todo->body : 'No List'}}  
			    <span class="pull-right">{{$todo->created_at ? $todo->created_at->diffForHumans() : 'Data Empty'}}</span>
			  </li>
			 	{!!Form::open(['method'=>'DELETE','action'=>['todocontroller@destroy', $todo->id]]) !!}
				<div class="form-group">
				@endforeach
			 	@endif	
				<a href="todo/create" class="btn btn-info col-4"> Add New</a>
				{!! Form::submit('Delete List', ['class'=>'btn btn-danger col-sm-6 pull-right']) !!}					
				{!! Form::close() !!}

				</div>
			</ul>

	</div>

@endsection