
@extends('layouts.layout')

@section('content')
    <div class="wrapper sub-details">
        <h1>Order for {{ $sub->name }}</h1>
        <p class="type">Type - {{ $sub->type }} </p>
        <p class="bread">Bread - {{ $sub->bread }} </p>
        <p class="vegetables">Vegetables:</p>
        <ul>
            @foreach($sub->vegetables as $vegetable)
                <li>{{ $vegetable }}</li>
            @endforeach
        </ul>
        <a class="back" href="/subs">All Subs</a>
        <form class="delete-form" action="/subs/{{ $sub->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete Sub</button>
        </form>
    </div>
@endsection
