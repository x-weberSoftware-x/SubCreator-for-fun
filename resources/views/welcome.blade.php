
@extends('layouts.layout')

@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
        <div class="title m-b-md">
                Sub Creator
            </div>
            <img class="main-image" src="/img/sub.jpg" alt="sub picture">
            <h1> Just For Fun</h1>
            <p class="mssg"> {{ session('mssg') }} </p>
            <a class="create" href="/subs/create">Create a Sub</a>
        </div>
    </div>
@endsection
