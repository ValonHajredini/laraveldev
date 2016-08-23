
@extends('layouts.main')
@section('title', 'Login')
@section('content')

<form action="/auth/login" method="POST">
    {!! csrf_field() !!}
    <div>
        Email: <input type="email" name="email" value="{!! old('email') !!}">
    </div>
    <div>
        Password: <input type="password" name="password" id="password">
    </div>
    <div>
        <input type="checkbox" name="remember" >Remembrer me
    </div>
    <div>
        <button type="submit">Login</button>
    </div>

</form>

    @stop