
@extends('layouts/share')

@section('main')
    <h1 class="text-3xl font-bold">{{$shares->title}}</h1>

    <p class="text-lg text-gray-700 p-2">
        {{$shares->content}}
    </p>

    <br><br>

    <a href="{{route('root')}}">back</a>
@endsection
