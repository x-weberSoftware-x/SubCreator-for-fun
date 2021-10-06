
@extends('layouts.layout')

@section('content')

    <div class="wrapper sub-index">
        <h1>Sub List</h1>
        @foreach($subs as $sub)
            <div class="sub-item">
                <img class="icon" src="img/sub-icon.png" alt="">
                <a class="name" href="/subs/{{ $sub->id }}">{{ $sub->name }}</a> 
            </div>
        @endforeach
        <a class="create" href="/">Home</a>
    </div>

@endsection
