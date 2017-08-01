@extends('layouts.app')


@section('body')
	
	<br>
<div class="container">	
	<div class="col-lg-6 col-lg-offset-2">
		<center><h1>Create New Item</h1></center>
		{!! Form::open(['method'=>'POST' , 'action' => 'todocontroller@store' ]) !!}	
		{{csrf_field()}}
		    <div class="form-group">
		      <div class="col-lg-12">
		        <textarea class="form-control" name="body" rows="4" id="textArea"></textarea>
		       <br>
		       @if (count($errors)>0)
			   	<div class="alert alert-danger">
				@foreach ($errors->all() as $error)
				{{$error}}
				@endforeach
				</div>
		@endif
		      </div>
		    </div>
		{!! Form::submit('submit', ['class' => 'btn btn-primary col-sm-6']) !!}
		{!! Form::close() !!}
		<a href="/todo" class="btn btn-info col-sm-4 pull-right">Back</a>

	</div>
		
</div>
@endsection