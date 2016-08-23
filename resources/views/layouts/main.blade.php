<!DOCTYPE html>
<head>
    <title>TaskManager- @yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<header>
    <h1>Task manager</h1>
    <nav>
        <li><a href="/task">Home</a></li>
        @if(!Auth::guest())
        <li><a href="/task/create">Create new Task</a></li>
        <li><a href="/auth/logout">Logout</a></li>

        @else
            <li><a href="/auth/login">Login</a></li>
        @endif
    </nav>
</header>
<div class="clr"></div>
@if(Session::has('message'))
<div>
    {!! Session::get('message') !!}
</div>
@endif
@foreach($errors->all() as $error)
    <p>{{$error}}</p>
@endforeach
    @yield('content')
</body>