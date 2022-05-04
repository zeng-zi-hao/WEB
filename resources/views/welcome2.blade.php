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
    <div class="hover:bg-gray-400 mr-3"><a href="#" class="text-lg text-white"> How to care cat </a></div>
    <div class="hover:bg-gray-400 mr-3"><a href="{{route('share')}}" class="text-lg text-white"> Share cat </a></div>
    <div class="hover:bg-gray-400 mr-3"><a href="#" class="text-lg text-white"> Adopt a furry child </a></div>
    <div class="hover:bg-gray-400 mr-3"><a href="#" class="text-lg text-white"> Pet supplies </a></div>

        @if (Route::has('login'))
            @auth
                <div class="hover:bg-gray-400 mr-3"><a href="{{ url('/dashboard') }}" class="text-lg text-white">Personal Information</a></div>
            @else
                <div class="hover:bg-gray-400 mr-3"><a href="{{ route('login') }}" class="text-lg text-white">Log in</a></div>

                @if (Route::has('register'))
                    <div class="hover:bg-gray-400 mr-3"><a href="{{ route('register') }}" class="text-lg text-white">Register</a></div>
                @endif
            @endauth
        @endif
</div>
<script src="{{asset('js/app.js')}}"></script>

<div class="text-xl flex justify-center my-2">
    HI~<br>
    Welcome to Meow<br>
    You can learn about pets here, and you can buy supplies for pets<br>
    Enjoy<br>
</div>

</body>
</html>
