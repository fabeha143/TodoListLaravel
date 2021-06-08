@extends('layouts.master')

@section('content')
{!! Form::open(array('url' => route('todolist.update', ['todolist' => $todoList->id]), 'method' => 'put')) !!}

            {{ Form::label('task','Edit Task') }}
            <div class="mb-3" style="width: 20%;">
			{!! Form::text('task_name',  $todoList->task_name ,array('class' => 'form-control')) !!}
			{!! Form::submit('Edit',array('class' => 'btn btn-large btn-primary openbutton')) !!}
	
	{!! Form::close() !!}
@endsection()