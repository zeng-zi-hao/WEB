@extends('layouts/title')

@section('main')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Meow</title>
</head>

<body class="bg-gray-200">

<div class="bg-gray-800 flex justify-center">
    @if (Route::has('login'))
        @auth
            <div class="hover:bg-gray-400 mr-3"><a href="{{ url('/dashboard') }}" class="text-lg text-white"> 個人資訊 </a></div>
        @else
            <div class="hover:bg-gray-400 mr-3"><a href="{{ route('login') }}" class="text-lg text-white"> 登入 </a></div>

            @if (Route::has('register'))
                <div class="hover:bg-gray-400 mr-3"><a href="{{ route('register') }}" class="text-lg text-white"> 註冊 </a></div>
            @endif
        @endauth
    @endif
</div>

<main class="m-4">
    @if(session()->has('notice'))
        <div class="bg-pink-300 px-3 py-2 rounded">
            {{session()->get('notice')}}
        </div>
    @endif
    @yield('main')
</main>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
@endsection


