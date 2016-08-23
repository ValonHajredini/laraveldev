@extends('layouts.main')
@section('title', 'Register')
@section('content')
<form action="/auth/register" method="POST">
    {!! csrf_field() !!}
    <div>
        name: <input type="text" name="name" value="{!! old('name') !!}">
        </div>
    <div>
        Email: <input type="email" name="email" value="{!! old('email') !!}">
        </div>
    <div>
        Password: <input type="password" name="password" id="password">
    </div>
    <div>
        Confirm Password: <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>

</form>
    @stop