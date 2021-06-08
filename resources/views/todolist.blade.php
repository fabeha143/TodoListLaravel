@extends('layouts.master')

@section('content')
    <a href="{{ route('todolist.create')}}">Add Todo List</a>
    <table border="1" cellpadding="10" cellspacing="0" style="font-family: Arial, Helvetica, sans-serif; border-collapse: collapse; width: 100%">
        <thead>
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px;">S.No</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Task name</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Completed At</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Action</th>
            </tr>
        </thead>
        <tbody>
            @if(count($todoLists))
                @foreach($todoLists as $list)

                    <tr>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{ $list->id}}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{ $list->task_name}}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{ $list->completed_at}}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">
                        {!! Form::open(array('url' => route('todolist.edit', ['todolist' => $list->id]), 'method' => 'get')) !!}		
                            {!! Form::submit('Edit', array('class' => 'btn btn-large btn-primary openbutton')) !!}
                    
                         {!! Form::close() !!}
                         <div>
                         {!! Form::open(array('url' => route('todolist.update', ['todolist' => $list->id]), 'method' => 'delete')) !!}		
                            {!! Form::submit('Delete', array('class' => 'btn btn-large btn-primary openbutton')) !!}
                    
                         {!! Form::close() !!}
                            
                        </td>
                        
                    </tr>
                @endforeach
            @else
            <tr>
                <td colspan="4">No data found!!</td>
            </tr>
            @endif
        
        </tbody>
    </table>
@endsection()
