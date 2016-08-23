@extends('layouts.main')
@section('title', 'My tasks')
@section('content')
    <h1>{!! $heading !!}</h1>
    @if($tasks )
<ul>
@foreach($tasks as $task)

        <li><a href="task/{{$task->id}}">{{$task->name}}</a></li>


@endforeach
</ul>
@else
    <h3>No tasks found!!</h3>
    @endif
@stop