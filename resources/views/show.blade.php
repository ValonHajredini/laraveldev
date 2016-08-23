@extends('layouts.main')
@section('title', 'My tasks')
@section('content')
<h1>{!! $task->name !!}</h1>

    <p>Date of created: {!! date('F d, Y', strtotime($task->created_at)) !!}</p>
<hr>
<a href="/task/{{ $task->id }}/edit">Edit</a>
{!!  Form::open(['method' => 'DELETE', 'route'=> ['task.destroy', $task->id]])  !!}
{!! Form::submit('Delete') !!}
{!! Form::close()  !!}
@stop