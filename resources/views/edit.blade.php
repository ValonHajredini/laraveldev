@extends('layouts.main')
@section('title','New task')
@section('content')
    <h1>EDit  Task</h1>

    {!! Form::open(array('action'=> [ 'Task2Controller@update',$task->id], 'method'=> 'POST')) !!}
    <p>
        {!! Form::label('task_name','Task Name') !!}
        {!! Form::text('name', $value = $task->name ) !!}
    </p>
    {{--<p>--}}
    {{--{!! Form::label('category', 'Select a category') !!}--}}
    {{--{!! Form::select('category',array('family'=>'Family','work'=>'Work','Other'=>'Other')) !!}--}}

    {{--</p>--}}

    {{--<p>--}}
    {{--{!! Form::label('date', 'Task date') !!}--}}
    {{--{!! Form::date('date',\Carbon\Carbon::now()) !!}--}}
    {{--</p>--}}
    <p>
        {!! Form::submit('Save') !!}
    </p>
{!! method_field('PUT') !!}
    {!! Form::close()!!}
@stop