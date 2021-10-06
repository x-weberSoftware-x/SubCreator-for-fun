
@extends('layouts.layout')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                    Sub Creator
                </div>
                <img class="main-image" src="/img/sub.jpg" alt="sub picture">
                <h1> Just For Fun</h1>
                <p class="mssg"> {{ session('mssg') }} </p>
                <a class="create" href="/subs/create">Create a Sub</a>
                <a class="create" href="/subs">Saved Subs</a>
            </div>
        </div>
    </div>
@endsection
