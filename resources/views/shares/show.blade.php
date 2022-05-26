@extends('layouts/title')

@section('show')
    <div class="m-5 ml-8">
        <h1 class="text-3xl font-bold text-indigo-500">標題: {{$shares->title}}</h1>
        <br>
        <p class="text-2xl text-gray-700 p-2">
            內文: {{$shares->content}}
        </p>
        <br><br>
        <a href="JavaScript:history.back(-1)" class="bg-indigo-500 rounded p-2 text-white">back</a>
    </div>
@endsection

