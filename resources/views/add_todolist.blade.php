@extends('layouts.master')

@section('content')
{{ Form::open(array('route' => 'todolist.store' , 'method' => 'POST')) }}

    <div>
        {{ Form::label('task','Enter Task') }}
        <div class="mb-3" style="width: 20%;">
            {{ Form::text('task_name','Task',array('class' => 'form-control'))}}
        </div>
    </div>

    {{ Form::submit('Add',array('class' => 'btn btn-large btn-primary openbutton'))}}

{{ Form::close() }}
@endsection()