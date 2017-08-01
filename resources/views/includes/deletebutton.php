{!!Form::open(['method'=>'DELETE','action'=>['todocontroller@destroy', $todo->id]]) !!}
	<div class="form-group">
	{!! Form::submit('Delete', ['class'=>'btn btn-danger col-sm-6']) !!}					
{!! Form::close() !!}
</div>